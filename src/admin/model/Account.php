<?php
namespace mirolabs\dotpay\client\admin\model;
use JMS\Serializer\Annotation as JMS;

class Account
{
    /**
     * @var int
     * @JMS\Type("integer")
     */
    private $id;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $href;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $status;

    /**
     * @var int
     * @JMS\Type("integer")
     */
    private $mccCode;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $mainUrl;

    /**
     * @var AccountConfig
     * @JMS\Type("mirolabs\dotpay\client\admin\model\AccountConfig")
     */
    private $config;

    
    public function getId()
    {
        return $this->id;
    }

    public function getHref()
    {
        return $this->href;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getMccCode()
    {
        return $this->mccCode;
    }

    public function getMainUrl()
    {
        return $this->mainUrl;
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setHref($href)
    {
        $this->href = $href;
        return $this;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function setMccCode($mccCode)
    {
        $this->mccCode = $mccCode;
        return $this;
    }

    public function setMainUrl($mainUrl)
    {
        $this->mainUrl = $mainUrl;
        return $this;
    }

    public function setConfig($config)
    {
        $this->config = $config;
        return $this;
    }



}