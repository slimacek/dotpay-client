<?php
namespace mirolabs\dotpay\client\admin\model;
use JMS\Serializer\Annotation as JMS;

class Transfer
{
    /**
     * @var double
     * @JMS\Type("double")
     */
    private $amount;

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
     * @var TransferRecipient
     * @JMS\Type("mirolabs\dotpay\client\admin\model\TransferRecipient")
     */
    private $recipient;

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
     * @return TransferRecipient
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     *
     * @param double $amount
     * @return \mirolabs\dotpay\client\admin\model\Transfer
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     *
     * @param string $control
     * @return \mirolabs\dotpay\client\admin\model\Transfer
     */
    public function setControl($control)
    {
        $this->control = $control;
        return $this;
    }

    /**
     *
     * @param string $description
     * @return \mirolabs\dotpay\client\admin\model\Transfer
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * 
     * @param \mirolabs\dotpay\client\admin\model\TransferRecipient $recipient
     * @return \mirolabs\dotpay\client\admin\model\Transfer
     */
    public function setRecipient(TransferRecipient $recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }


}