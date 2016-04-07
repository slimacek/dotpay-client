<?php
namespace mirolabs\dotpay\client\admin\model;
use JMS\Serializer\Annotation as JMS;

class AccountConfig
{
    /**
     * @var string
     * @JMS\Type("string")
     */
    private $urlc;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $blockExternalUrlc;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $pin;

    public function getUrlc()
    {
        return $this->urlc;
    }

    public function getBlockExternalUrlc()
    {
        return $this->blockExternalUrlc;
    }

    public function getPin()
    {
        return $this->pin;
    }

    public function setUrlc($urlc)
    {
        $this->urlc = $urlc;
        return $this;
    }

    public function setBlockExternalUrlc($blockExternalUrlc)
    {
        $this->blockExternalUrlc = $blockExternalUrlc;
        return $this;
    }

    public function setPin($pin)
    {
        $this->pin = $pin;
        return $this;
    }


}