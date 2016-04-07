<?php
namespace test\dotpay;

use mirolabs\dotpay\client\admin\Configuration;
use mirolabs\dotpay\client\admin\Operations;
use mirolabs\dotpay\client\admin\model;

class OpertionsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Operations
     */
    private $operations;

    public function setUp()
    {
        parent::setUp();
        $config = new Configuration(
            TestConfiguration::DOTPAY_LOGIN,
            TestConfiguration::DOTPAY_PASSWORD,
            TestConfiguration::DOTPAY_ADDRESS);
        $this->operations = new Operations($config);

    }

    public function testShouldByGetOpertaions()
    {
        $param = new model\OperationParam();
        //print_r($this->operations->getOperatons($param));


        //$this->assertInstanceOf("mirolabs\dotpay\client\admin\model\Pageable", $this->accounts->getAccounts());
    }
}