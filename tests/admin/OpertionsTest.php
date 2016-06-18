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
        $result = $this->operations->getOperatons($param);
        $this->assertInstanceOf("mirolabs\dotpay\client\admin\model\Pageable", $result);
    }

    public function testShouldByGetOpertaion()
    {
        $param = new model\OperationParam();
        $result = $this->operations->getOperation('M9054-2210');
        $this->assertInstanceOf("mirolabs\dotpay\client\admin\model\Operation", $result);
    }

    public function testShouldByGetOpertaionsPayout()
    {
        $param = new model\OperationParam();
        $result = $this->operations->getOperationsPayout('M9316-6242');
        $this->assertInstanceOf("mirolabs\dotpay\client\admin\model\Pageable", $result);
    }
}