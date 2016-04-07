<?php
namespace test\dotpay;


use mirolabs\dotpay\client\admin\Configuration;
use mirolabs\dotpay\client\admin\Accounts;
use mirolabs\dotpay\client\admin\model;

class AccountsTest extends \PHPUnit_Framework_TestCase
{
    private $accounts;

    public function setUp()
    {
        parent::setUp();
        $config = new Configuration(
            TestConfiguration::DOTPAY_LOGIN,
            TestConfiguration::DOTPAY_PASSWORD,
            TestConfiguration::DOTPAY_ADDRESS);
        $this->accounts = new Accounts($config);

    }

    public function testShouldByGetAccounts()
    {
        $this->assertInstanceOf("mirolabs\dotpay\client\admin\model\Pageable", $this->accounts->getAccounts());
    }

    public function testShouldByGetChannels()
    {
        $this->assertTrue(is_array($this->accounts->getChannels(TestConfiguration::DOTPAY_ACCOUNT_ID)));
    }

    public function testShouldByCreatedPaymentLink()
    {
        $address = new model\Address();
        $address
            ->setStreet("Polska")
            ->setBuildingNumber(11)
            ->setFlatNumber(23)
            ->setCity("Poznań")
            ->setRegion("wielkopolska")
            ->setCountry("POL");

        $payer = new model\Payer();
        $payer
            ->setEmail("user@example.com")
            ->setPhone("123-123-123")
            ->setFirstName("Marian")
            ->setLastName("Nowak")
            ->setAddress($address);

        $rec = new model\Recipient();
        $rec
            ->setCompany("test")
            ->setAccountNumber("PL92942215610877228680536980")
            ->setAddress($address);

        $date = new \DateTime();
        $date = $date->add(new \DateInterval('P10D'));

        $link = new model\PaymentLink();
        $link
            ->setAmount(5.01)
            ->setCurrency("PLN")
            ->setDescription("Test")
            ->setControl("aaabbbccc")
            ->setLanguage("pl")
            ->setChannelId(4)
            ->setChLock(1)
            ->setOnlinetransfer(1)
            ->setRedirectionType(0)
            ->setUrl("http://example.com")
            ->setUrlc("http://example.com")
            ->setExpirationDatetime($date)
            ->setPayer($payer)
            ->setRecipient($rec);

        $this->assertInstanceOf("mirolabs\dotpay\client\admin\model\PaymentLink",
            $this->accounts->createPaymentLink(TestConfiguration::DOTPAY_ACCOUNT_ID, $link));
    }

    public function testShouldByGetPaymentLinks()
    {
        $this->assertInstanceOf("mirolabs\dotpay\client\admin\model\Pageable",
            $this->accounts->getPaymentLinks(TestConfiguration::DOTPAY_ACCOUNT_ID));

    }


    public function testShouldByDeletePaymentLinks()
    {
        //$accounts->deletePaymentLink(TestConfiguration::DOTPAY_ACCOUNT_ID, 'df8be8vlxrdrqteq01k0k5s7d7o26nc6');
    }


    public function testShouldByCreatedTransfer()
    {
        $transfer1 = new model\Transfer();

        $transfer1
            ->setAmount(5.01)
            ->setControl("zzzbbbccc")
            ->setDescription("test or ...")
            ->setRecipient(new model\TransferRecipient())
            ->getRecipient()
            ->setAccountNumber("PL92942215610877228680536980")
            ->setName("For you");

        $transfer2 = new model\Transfer();
        $transfer2
            ->setAmount(2.01)
            ->setControl("zzzbbbccc")
            ->setDescription("test or ...")
            ->setRecipient(new model\TransferRecipient())
            ->getRecipient()
            ->setAccountNumber("PL92942215610877228680536980")
            ->setName("For you");

        $transferRequest = new model\TransferRequest();
        $transferRequest
            ->setCurrency("PLN")
            ->setTransfers([$transfer1, $transfer2]);

        $response = $this->accounts->createTransfers(TestConfiguration::DOTPAY_ACCOUNT_ID, $transferRequest);
        $this->assertInstanceOf("mirolabs\dotpay\client\admin\model\TransferStatus", $response);
        $this->assertEquals("ok", $response->getDetail());
    }

}