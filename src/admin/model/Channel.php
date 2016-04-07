<?php
namespace mirolabs\dotpay\client\admin\model;
use JMS\Serializer\Annotation as JMS;

class Channel
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
    private $name;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $logo;

    /**
     * @var int
     * @JMS\Type("string")
     */
    private $group;

    /**
     * @var string
     * @JMS\Type("boolean")
     * @JMS\SerializedName("is_blocked_by_seller")
     */
    private $isBlockedBySeller;

    /**
     * @var string
     * @JMS\Type("boolean")
     * @JMS\SerializedName("is_disabled")
     */
    private $isDisabled;

        /**
     * @var string
     * @JMS\Type("boolean")
     * @JMS\SerializedName("is_offline")
     */
    private $isOffline;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function getGroup()
    {
        return $this->group;
    }

    public function getIsBlockedBySeller()
    {
        return $this->isBlockedBySeller;
    }

    public function getIsDisabled()
    {
        return $this->isDisabled;
    }

    public function getIsOffline()
    {
        return $this->isOffline;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setLogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }

    public function setIsBlockedBySeller($isBlockedBySeller)
    {
        $this->isBlockedBySeller = $isBlockedBySeller;
        return $this;
    }

    public function setIsDisabled($isDisabled)
    {
        $this->isDisabled = $isDisabled;
        return $this;
    }

    public function setIsOffline($isOffline)
    {
        $this->isOffline = $isOffline;
        return $this;
    }


}