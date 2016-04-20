<?php
namespace mirolabs\dotpay\client\payment\model;
use JMS\Serializer\Annotation as JMS;

class Notice
{

    /**
     * @var int
     * @JMS\Type("integer")
     */
    private $id;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("operation_number")
     */
    private $operationNumber;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("operation_type")
     */
    private $operationType;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("operation_status")
     */
    private $operationStatus;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("operation_amount")
     */
    private $operationAmount;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("operation_currency")
     */
    private $operationCurrency;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("operation_withdrawal_amount")
     */
    private $operationWithdrawalAmount;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("operation_commission_amount")
     */
    private $operationCommissionAmount;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("operation_original_amount")
     */
    private $operationOriginalAmount;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("operation_original_currency")
     */
    private $operationOriginalCurrency;

    /**
     * @var \DateTime
     * @JMS\Type("DateTime<'Y-m-d\TH:i:s.u'>")
     * @JMS\SerializedName("operation_datetime")
     */
    private $operationDateTime;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("operation_related_number")
     */
    private $operationRelatedNumber;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $control;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $description;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $email;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("p_info")
     */
    private $info;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("p_email")
     */
    private $contactEmail;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $channel;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("channel_country")
     */
    private $channelCountry;


    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("geoip_country")
     */
    private $geoIpCountry;
    
    /**
     * @var string
     * @JMS\Type("string")
     */
    private $signature;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getOperationNumber()
    {
        return $this->operationNumber;
    }

    /**
     * @return string
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * @return string
     */
    public function getOperationStatus()
    {
        return $this->operationStatus;
    }

    /**
     * @return string
     */
    public function getOperationAmount()
    {
        return $this->operationAmount;
    }

    /**
     * @return string
     */
    public function getOperationCurrency()
    {
        return $this->operationCurrency;
    }

    /**
     * @return string
     */
    public function getOperationWithdrawalAmount()
    {
        return $this->operationWithdrawalAmount;
    }

    /**
     * @return string
     */
    public function getOperationCommissionAmount()
    {
        return $this->operationCommissionAmount;
    }

    /**
     * @return string
     */
    public function getOperationOriginalAmount()
    {
        return $this->operationOriginalAmount;
    }

    /**
     * @return string
     */
    public function getOperationOriginalCurrency()
    {
        return $this->operationOriginalCurrency;
    }

    /**
     * @return \DateTime
     */
    public function getOperationDateTime()
    {
        return $this->operationDateTime;
    }

    /**
     * @return string
     */
    public function getOperationRelatedNumber()
    {
        return $this->operationRelatedNumber;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @return string
     */
    public function getChannelCountry()
    {
        return $this->channelCountry;
    }

    /**
     *
     * @return string
     */
    public function getGeoIpCountry()
    {
        return $this->geoIpCountry;
    }



    /**
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }


    /**
     * 
     * @param type $id
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $operationNumber
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setOperationNumber($operationNumber)
    {
        $this->operationNumber = $operationNumber;
        return $this;
    }

    /**
     * @param string $operationNumber
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;
        return $this;
    }

    /**
     * @param string $operationNumber
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setOperationStatus($operationStatus)
    {
        $this->operationStatus = $operationStatus;
        return $this;
    }

    /**
     * @param string $operationNumber
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setOperationAmount($operationAmount)
    {
        $this->operationAmount = $operationAmount;
        return $this;
    }

    /**
     * @param string $operationNumber
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setOperationCurrency($operationCurrency)
    {
        $this->operationCurrency = $operationCurrency;
        return $this;
    }

    /**
     * @param string $operationNumber
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setOperationWithdrawalAmount($operationWithdrawalAmount)
    {
        $this->operationWithdrawalAmount = $operationWithdrawalAmount;
        return $this;
    }

    /**
     * @param string $operationNumber
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setOperationCommissionAmount($operationCommissionAmount)
    {
        $this->operationCommissionAmount = $operationCommissionAmount;
        return $this;
    }

    /**
     * @param string $operationNumber
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setOperationOriginalAmount($operationOriginalAmount)
    {
        $this->operationOriginalAmount = $operationOriginalAmount;
        return $this;
    }

    /**
     * @param string $operationNumber
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setOperationOriginalCurrency($operationOriginalCurrency)
    {
        $this->operationOriginalCurrency = $operationOriginalCurrency;
        return $this;
    }

    /**
     * @param string $operationNumber
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setOperationDateTime(\DateTime $operationDateTime)
    {
        $this->operationDateTime = $operationDateTime;
        return $this;
    }

    /**
     * @param string $operationNumber
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setOperationRelatedNumber($operationRelatedNumber)
    {
        $this->operationRelatedNumber = $operationRelatedNumber;
        return $this;
    }

    /**
     * @param string $operationNumber
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setControl($control)
    {
        $this->control = $control;
        return $this;
    }

    /**
     * @param string $operationNumber
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string $operationNumber
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param string $operationNumber
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setInfo($info)
    {
        $this->info = $info;
        return $this;
    }

    /**
     * @param string $operationNumber
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }

    /**
     * @param string $operationNumber
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * @param string $operationNumber
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setChannelCountry($channelCountry)
    {
        $this->channelCountry = $channelCountry;
        return $this;
    }

    /**
     * 
     * @param string $geoIpCountry
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setGeoIpCountry($geoIpCountry)
    {
        $this->geoIpCountry = $geoIpCountry;
        return $this;
    }


    /**
     * @param string $operationNumber
     * @return \mirolabs\dotpay\client\payment\model\Notice
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
        return $this;
    }
}