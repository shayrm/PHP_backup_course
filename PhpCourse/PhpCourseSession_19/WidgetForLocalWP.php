<?php
class PicRotatorWidget extends WP_Widget
{
    public $name = 'Picture (coupon) Rotator';
    public $description = 'This widget choose random pictures files from specific directory';
    public $control_options = array();
    
    function __construct()
    {
        $widget_options = array(
            'classname' => 'PicRotatorWidget',
            'description' => $this->description);
        
        parent::__construct(
            'PicRotatorWidget',
            $this->name,$widget_options,$this->control_options);
    }
    
    static function register_this_widget()
    {
        register_widget('PicRotatorWidget');
    }
    
    function widget($args, $instance)
    {
        include '../../PhpCourseSession_19/TestingWidget.php';
        print "This is My Amazing Rotating Ads Widget";
        new RandomPic;
    }
}