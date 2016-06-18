<?php
namespace test\dotpay;


use mirolabs\dotpay\client\admin\Configuration;
use mirolabs\dotpay\client\admin\Payments;
use mirolabs\dotpay\client\admin\model;

class PaymentsTest extends \PHPUnit_Framework_TestCase
{
    private $payments;

    public function setUp()
    {
        parent::setUp();
        $config = new Configuration(
            TestConfiguration::DOTPAY_LOGIN,
            TestConfiguration::DOTPAY_PASSWORD,
            TestConfiguration::DOTPAY_ADDRESS);
        $this->payments = new Payments($config);

    }

    public function testShouldByGetPayments()
    {
        $this->assertInstanceOf("mirolabs\dotpay\client\admin\model\Pageable", $this->payments->getPayments());
    }

    public function testShouldByGetPayment()
    {
        $result = $this->payments->getPayment('M9054-2210');
        $this->assertInstanceOf("mirolabs\dotpay\client\admin\model\Operation", $result);
    }
}