<?php
namespace mirolabs\dotpay\client\admin\model;
use JMS\Serializer\Annotation as JMS;

class TransferRecipient
{
    /**
     * IBAN
     * 
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("account_number")
     */
    private $accountNumber;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $name;

    /**
     * 
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $accountNumber
     * @return \mirolabs\dotpay\client\admin\model\TransferRecipient
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }


    /**
     * @param string $name
     * @return \mirolabs\dotpay\client\admin\model\TransferRecipient
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
