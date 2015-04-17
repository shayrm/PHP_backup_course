<?php
/**
 * Unit tests for HTML_QuickForm2 package
 *
 * PHP version 5
 *
 * LICENSE:
 *
 * Copyright (c) 2006-2014, Alexey Borzov <avb@php.net>,
 *                          Bertrand Mansion <golgote@mamasam.com>
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *    * Redistributions of source code must retain the above copyright
 *      notice, this list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright
 *      notice, this list of conditions and the following disclaimer in the
 *      documentation and/or other materials provided with the distribution.
 *    * The names of the authors may not be used to endorse or promote products
 *      derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS
 * IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO,
 * THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR
 * PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR
 * CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 * EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
 * PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 * PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY
 * OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 * NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @category   HTML
 * @package    HTML_QuickForm2
 * @author     Alexey Borzov <avb@php.net>
 * @license    http://opensource.org/licenses/bsd-license.php New BSD License
 * @link       http://pear.php.net/package/HTML_QuickForm2
 */

/** Sets up includes */
require_once dirname(dirname(dirname(__FILE__))) . '/TestHelper.php';

/**
 * Unit test for HTML_QuickForm2_Element_InputCheckbox class
 */
class HTML_QuickForm2_Element_InputCheckboxTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $_POST = array(
            'box1'      => '1',
            'vegetable' => array('1', '3')
        );
        $_GET = array();
    }

    public function testDefaultValueAttributeIs1()
    {
        $box = new HTML_QuickForm2_Element_InputCheckbox();
        $this->assertEquals('1', $box->getAttribute('value'));
    }

    public function testCheckboxUncheckedOnSubmit()
    {
        $formPost = new HTML_QuickForm2('boxed', 'post', null, false);
        $box1 = $formPost->appendChild(new HTML_QuickForm2_Element_InputCheckbox('box1'));
        $box2 = $formPost->appendChild(new HTML_QuickForm2_Element_InputCheckbox('box2'));
        $this->assertEquals('1', $box1->getValue());
        $this->assertNull($box2->getValue());

        $formPost->addDataSource(new HTML_QuickForm2_DataSource_Array(array(
            'box2' => '1'
        )));
        $this->assertEquals('1', $box1->getValue());
        $this->assertNull($box2->getValue());

        $formGet = new HTML_QuickForm2('boxed2', 'get', null, false);
        $box3 = $formGet->appendChild(new HTML_QuickForm2_Element_InputCheckbox('box3'));
        $this->assertNull($box3->getValue());

        $formGet->addDataSource(new HTML_QuickForm2_DataSource_Array(array(
            'box3' => '1'
        )));
        $this->assertEquals('1', $box3->getValue());
    }

   /**
    * Allow to properly set values for checkboxes named like 'box[]'
    * @see http://pear.php.net/bugs/bug.php?id=16806
    */
    public function testRequest16806()
    {
        $formPost = new HTML_QuickForm2('request16806', 'post', null, false);

        $box1 = $formPost->addElement('checkbox', 'vegetable[]', array('value' => 1), array('label' => 'carrot'));
        $box2 = $formPost->addElement('checkbox', 'vegetable[]', array('value' => 2), array('label' => 'pea'));
        $box3 = $formPost->addElement('checkbox', 'vegetable[]', array('value' => 3), array('label' => 'bean'));

        $this->assertEquals('checked', $box1->getAttribute('checked'));
        $this->assertNotEquals('checked', $box2->getAttribute('checked'));
        $this->assertEquals('checked', $box3->getAttribute('checked'));
    }

   /**
    * Notices were emitted when 'content' key was missing from $data
    * @see http://pear.php.net/bugs/bug.php?id=16816
    */
    public function testBug16816()
    {
        $box = new HTML_QuickForm2_Element_InputCheckbox(
            'vegetable[1]', array('value' => 2, 'checked' => 1), array('label' => 'pea')
        );
        $boxHtml = $box->__toString();
    }

   /**
    * Explicitly setting value to 0 resulted in value="1"
    * @see http://news.php.net/php.pear.general/31496
    */
    public function testValue0()
    {
        $box = new HTML_QuickForm2_Element_InputCheckbox(
            'testBox', array('value' => 0)
        );
        $this->assertContains('value="0"', $box->__toString());
    }

    /**
     * If a form contained only non-submit data sources, 'checked' attribute was unlikely to be ever cleared
     */
    public function testCheckedAttributeShouldBeCleared()
    {
        $formNoSubmit = new HTML_QuickForm2('neverSubmitted');
        $box1 = new HTML_QuickForm2_Element_InputCheckbox('box1', 'checked');
        $box2 = new HTML_QuickForm2_Element_InputCheckbox('box2');
        $formNoSubmit->appendChild($box1);
        $formNoSubmit->appendChild($box2);

        $this->assertNotNull($box1->getAttribute('checked'));
        $this->assertNull($box2->getAttribute('checked'));

        $formNoSubmit->addDataSource(new HTML_QuickForm2_DataSource_Array(array(
            'box2' => true
        )));
        $this->assertNotNull($box2->getAttribute('checked'));
        $this->assertNull($box1->getAttribute('checked'));

        $box2->setName('box3');
        $this->assertNull($box2->getAttribute('checked'));
    }

    /**
     * If data source contains explicitly provided null values, those should be used
     * @link http://pear.php.net/bugs/bug.php?id=20295
     */
    public function testBug20295()
    {
        $form = new HTML_QuickForm2('bug20295');
        $box  = $form->addCheckbox('box', array('value' => 'yep', 'checked' => 'checked'));

        // data source searching should stop on finding this null
        $form->addDataSource(new HTML_QuickForm2_DataSource_Array(array(
            'box' => null
        )));
        $form->addDataSource(new HTML_QuickForm2_DataSource_Array(array(
            'box' => 'yep'
        )));

        $this->assertNull($box->getValue());
    }
}
?>
