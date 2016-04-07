<?php
namespace mirolabs\dotpay\client\admin\model;
use JMS\Serializer\Annotation as JMS;

class PaymentLink
{
    /**
     * @var string
     * @JMS\Type("string")
     */
    private $href;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("$payment_url")
     */
    private $paymentUrl;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $token;

    /**
     * @var float
     * @JMS\Type("float")
     */
    private $amount;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $currency;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $description;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $control;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $language;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("channelId")
     */
    private $channelId;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("ch_lock")
     */
    private $chLock;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $onlinetransfer;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("redirection_type")
     */
    private $redirectionType;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $url;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $urlc;

    /**
     * @var \DateTime
     * @JMS\Type("DateTime<'Y-m-d\TH:i:s.u'>")
     * @JMS\SerializedName("expiration_datetime")
     */
    private $expirationDatetime;

    /**
     * @var Payer
     * @JMS\Type("mirolabs\dotpay\client\admin\model\Payer")
     */
    private $payer;

    /**
     * @var Recipient
     * @JMS\Type("mirolabs\dotpay\client\admin\model\Recipient")
     */
    private $recipient;

    /**
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * @return string
     */
    public function getPaymentUrl()
    {
        return $this->paymentUrl;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getControl()
    {
        return $this->control;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @return string
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * @return string
     */
    public function getChLock()
    {
        return $this->chLock;
    }

    /**
     * @return string
     */
    public function getOnlinetransfer()
    {
        return $this->onlinetransfer;
    }

    /**
     * @return string
     */
    public function getRedirectionType()
    {
        return $this->redirectionType;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getUrlc()
    {
        return $this->urlc;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDatetime()
    {
        return $this->expirationDatetime;
    }

    /**
     * @return Payer
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * @return Recipient
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param string $href
     * @return \mirolabs\dotpay\client\admin\model\PaymentLink
     */
    public function setHref($href)
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param string $href
     * @return \mirolabs\dotpay\client\admin\model\PaymentLink
     */
    public function setPaymentUrl($paymentUrl)
    {
        $this->paymentUrl = $paymentUrl;
        return $this;
    }

    /**
     * @param string $href
     * @return \mirolabs\dotpay\client\admin\model\PaymentLink
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @param string $href
     * @return \mirolabs\dotpay\client\admin\model\PaymentLink
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @param string $href
     * @return \mirolabs\dotpay\client\admin\model\PaymentLink
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @param string $href
     * @return \mirolabs\dotpay\client\admin\model\PaymentLink
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string $href
     * @return \mirolabs\dotpay\client\admin\model\PaymentLink
     */
    public function setControl($control)
    {
        $this->control = $control;
        return $this;
    }

    /**
     * @param string $href
     * @return \mirolabs\dotpay\client\admin\model\PaymentLink
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @param string $href
     * @return \mirolabs\dotpay\client\admin\model\PaymentLink
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
        return $this;
    }

    /**
     * @param string $href
     * @return \mirolabs\dotpay\client\admin\model\PaymentLink
     */
    public function setChLock($chLock)
    {
        $this->chLock = $chLock;
        return $this;
    }

    /**
     * @param string $href
     * @return \mirolabs\dotpay\client\admin\model\PaymentLink
     */
    public function setOnlinetransfer($onlinetransfer)
    {
        $this->onlinetransfer = $onlinetransfer;
        return $this;
    }

    /**
     * @param string $href
     * @return \mirolabs\dotpay\client\admin\model\PaymentLink
     */
    public function setRedirectionType($redirectionType)
    {
        $this->redirectionType = $redirectionType;
        return $this;
    }

    /**
     * @param string $href
     * @return \mirolabs\dotpay\client\admin\model\PaymentLink
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @param string $href
     * @return \mirolabs\dotpay\client\admin\model\PaymentLink
     */
    public function setUrlc($urlc)
    {
        $this->urlc = $urlc;
        return $this;
    }

    /**
     *
     * @param \DateTime $expirationDatetime
     * @return \mirolabs\dotpay\client\admin\model\PaymentLink
     */
    public function setExpirationDatetime(\DateTime $expirationDatetime)
    {
        $this->expirationDatetime = $expirationDatetime;
        return $this;
    }

    /**
     *
     * @param \mirolabs\dotpay\client\admin\model\Payer $payer
     * @return \mirolabs\dotpay\client\admin\model\PaymentLink
     */
    public function setPayer(Payer $payer)
    {
        $this->payer = $payer;
        return $this;
    }

    /**
     * @param \mirolabs\dotpay\client\admin\model\Recipient $recipient
     * @return \mirolabs\dotpay\client\admin\model\PaymentLink
     */
    public function setRecipient(Recipient $recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }
   
}