<?php
namespace test\dotpay;

class NotificationTest implements \mirolabs\dotpay\client\payment\Notification
{
    public function callNotification(\mirolabs\dotpay\client\payment\model\Notice $notice)
    {
    }

}


class DotPayTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var dotpay
     */
    private $dotpay;


    public function setUp()
    {
        parent::setUp();
        $this->dotpay = new \mirolabs\dotpay\client\payment\DotPay('pin');
    }

    public function testNotification()
    {
        $notificationClass = $this
            ->getMockBuilder('test\dotpay\NotificationTest')
            ->setMethods(array('callNotification'))
            ->getMock();
        $notificationClass->expects($this->once())->method('callNotification');
        $this->dotpay->setNotificationObjects([$notificationClass]);
        $this->preparePost();

        $this->dotpay->receivedNotice();



        
    }





    private function preparePost()
    {
        $_POST['id'] = 12345;
        $_POST['operation_number'] = 'aaaa-bbbb';
        $_POST['operation_type'] = 'payout';
        $_POST['operation_status'] = 'new';
        $_POST['operation_amount'] = 1.23;
        $_POST['operation_currency'] = 'PLN';
        $_POST['operation_datetime'] = '2016-04-07 09:18:23';
        $_POST['operation_related_number'] = 'M1234-5678';
        $_POST['control'] = '11123';
        $_POST['description'] ="opis wypłaty";
        $_POST['email'] ="john@example.com";
        $_POST['channel'] = 2;
        $_POST['channel_country'] = "PL";
        $_POST['geoip_country'] = "EN";
        $_POST['signature'] = hash('sha256', 'pin12345aaaa-bbbbpayoutnew1.23PLN2016-04-07 09:18:23M1234-567811123'
            . 'opis wypłatyjohn@example.com2PLEN');

    }

}