<?php
namespace mirolabs\dotpay\client\admin\model;
use JMS\Serializer\Annotation as JMS;

class Operation
{
    /**
     * @var string
     * @JMS\Type("string")
     */
    private $href;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $number;

    /**
     * @var \DateTime
     * @JMS\Type("DateTime<'Y-m-d\TH:i:s.u'>")
     * @JMS\SerializedName("creation_datetime")
     */
    private $creationDateTime;

    /**
     * @var OperationType
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getTypeString",setter="setTypeString")
     */
    private $type;

    /**
     * @var OperationStatus
     * @JMS\Type("string")
     * @JMS\Accessor(getter="getStatusString",setter="setStatusString")
     */
    private $status;

    /**
     * @var double
     * @JMS\Type("double")
     */
    private $amount;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $currency;

    /**
     * @var double
     * @JMS\Type("double")
     * @JMS\SerializedName("original_amount")
     */
    private $originalAmount;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("original_currency")
     */
    private $originalCurrency;

    /**
     * @var int
     * @JMS\Type("int")
     * @JMS\SerializedName("account_id")
     */
    private $accountId;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("related_operation")
     */
    private $relatedOperation;

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
     * @var Payer
     * @JMS\Type("mirolabs\dotpay\client\admin\model\Payer")
     */
    private $payer;

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
    public function getNumber()
    {
        return $this->number;
    }

    /**
     *
     * @return \DateTime
     */
    public function getCreationDateTime()
    {
        return $this->creationDateTime;
    }

    /**
     * @return OperationType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return OperationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return double
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
     * @return double
     */
    public function getOriginalAmount()
    {
        return $this->originalAmount;
    }

    /**
     * @return string
     */
    public function getOriginalCurrency()
    {
        return $this->originalCurrency;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @return string
     */
    public function getRelatedOperation()
    {
        return $this->relatedOperation;
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
     * @return Payer
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * @param string $href
     * @return \mirolabs\dotpay\client\admin\model\Operation
     */
    public function setHref($href)
    {
        $this->href = $href;
        return $this;
    }

    /**
     *
     * @param string $number
     * @return \mirolabs\dotpay\client\admin\model\Operation
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     *
     * @param \DateTime $creationDateTime
     * @return \mirolabs\dotpay\client\admin\model\Operation
     */
    public function setCreationDateTime(\DateTime $creationDateTime)
    {
        $this->creationDateTime = $creationDateTime;
        return $this;
    }

    /**
     *
     * @param \mirolabs\dotpay\client\admin\model\OperationType $type
     * @return \mirolabs\dotpay\client\admin\model\Operation
     */
    public function setType(OperationType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     *
     * @param \mirolabs\dotpay\client\admin\model\OperationStatus $status
     * @return \mirolabs\dotpay\client\admin\model\Operation
     */
    public function setStatus(OperationStatus $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     *
     * @param double $amount
     * @return \mirolabs\dotpay\client\admin\model\Operation
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     *
     * @param string $currency
     * @return \mirolabs\dotpay\client\admin\model\Operation
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     *
     * @param double $originalAmount
     * @return \mirolabs\dotpay\client\admin\model\Operation
     */
    public function setOriginalAmount($originalAmount)
    {
        $this->originalAmount = $originalAmount;
        return $this;
    }

    /**
     *
     * @param string $originalCurrency
     * @return \mirolabs\dotpay\client\admin\model\Operation
     */
    public function setOriginalCurrency($originalCurrency)
    {
        $this->originalCurrency = $originalCurrency;
        return $this;
    }

    /**
     *
     * @param int $accountId
     * @return \mirolabs\dotpay\client\admin\model\Operation
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     *
     * @param string $relatedOperation
     * @return \mirolabs\dotpay\client\admin\model\Operation
     */
    public function setRelatedOperation($relatedOperation)
    {
        $this->relatedOperation = $relatedOperation;
        return $this;
    }

    /**
     *
     * @param string $description
     * @return \mirolabs\dotpay\client\admin\model\Operation
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     *
     * @param string $control
     * @return \mirolabs\dotpay\client\admin\model\Operation
     */
    public function setControl($control)
    {
        $this->control = $control;
        return $this;
    }

    /**
     * @param \mirolabs\dotpay\client\admin\model\Payer $payer
     * @return \mirolabs\dotpay\client\admin\model\Operation
     */
    public function setPayer(Payer $payer)
    {
        $this->payer = $payer;
        return $this;
    }


    /**
     * @return string
     */
    public function getTypeString()
    {
        return is_null($this->type) ? "" : $this->type->getType();
    }

    /**
     * @param string $type
     */
    public function setTypeString($type)
    {
        $this->type = is_null($type) ? null : OperationType::get($type);
    }

    /**
     * @return string
     */
    public function getStatusString()
    {
        return is_null($this->status) ? "" : $this->status->getType();
    }

    /**
     * @param string $status
     */
    public function setStatusString($status)
    {
        $this->status = is_null($status) ? null : OperationStatus::get($status);
    }


}