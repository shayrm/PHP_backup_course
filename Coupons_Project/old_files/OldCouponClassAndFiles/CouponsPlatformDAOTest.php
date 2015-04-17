<?php
require_once 'Coupons_Project/CouponsPlatformDAOClass.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * CouponsPlatformDAO test case.
 */
class CouponsPlatformDAOTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var CouponsPlatformDAO
     */
    private $CouponsPlatformDAO;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated CouponsPlatformDAOTest::setUp()
        
        $this->CouponsPlatformDAO = new CouponsPlatformDAO(/* parameters */);
        $csv=NULL;
        $this->CouponsPlatformDAO->getCoupons($csv);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated CouponsPlatformDAOTest::tearDown()
        $this->CouponsPlatformDAO = null;
        
        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }

    /**
     * Tests CouponsPlatformDAO->__construct()
     */
    public function test__construct()
    {
        // TODO Auto-generated CouponsPlatformDAOTest->test__construct()
        $this->markTestIncomplete("__construct test not implemented");
        
        $this->CouponsPlatformDAO->__construct(/* parameters */);
    }

    /**
     * Tests CouponsPlatformDAO->ConnectToDatabase()
     */
    public function testConnectToDatabase()
    {
        // TODO Auto-generated CouponsPlatformDAOTest->testConnectToDatabase()
        $this->markTestIncomplete("ConnectToDatabase test not implemented");
        
        $this->CouponsPlatformDAO->ConnectToDatabase(/* parameters */);
    }

    /**
     * Tests CouponsPlatformDAO->runCouponQuery()
     */
    public function testRunCouponQuery()
    {
        // TODO Auto-generated CouponsPlatformDAOTest->testRunCouponQuery()
        $this->markTestIncomplete("runCouponQuery test not implemented");
        
        $this->CouponsPlatformDAO->runCouponQuery(/* parameters */);
    }

    /**
     * Tests CouponsPlatformDAO->getCoupon()
     */
    public function testGetCoupon()
    {
        // TODO Auto-generated CouponsPlatformDAOTest->testGetCoupon()
        $this->markTestIncomplete("getCoupon test not implemented");
        
        $this->CouponsPlatformDAO->getCoupon(/* parameters */);
    }

    /**
     * Tests CouponsPlatformDAO->getCoupons()
     */
    public function testGetCoupons()
    {
        // TODO Auto-generated CouponsPlatformDAOTest->testGetCoupons()
        $this->markTestIncomplete("getCoupons test not implemented");
        
        $this->CouponsPlatformDAO->getCoupons(/* parameters */);
    }

    /**
     * Tests CouponsPlatformDAO->addCoupon()
     */
    public function testAddCoupon()
    {
        // TODO Auto-generated CouponsPlatformDAOTest->testAddCoupon()
        $this->markTestIncomplete("addCoupon test not implemented");
        
        $this->CouponsPlatformDAO->addCoupon(/* parameters */);
    }

    /**
     * Tests CouponsPlatformDAO->updateCoupon()
     */
    public function testUpdateCoupon()
    {
        // TODO Auto-generated CouponsPlatformDAOTest->testUpdateCoupon()
        $this->markTestIncomplete("updateCoupon test not implemented");
        
        $this->CouponsPlatformDAO->updateCoupon(/* parameters */);
    }
}

