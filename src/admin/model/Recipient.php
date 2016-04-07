<?php
namespace mirolabs\dotpay\client\admin\model;
use JMS\Serializer\Annotation as JMS;

class Recipient
{
    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("first_name")
     */
    private $firstName;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("last_name")
     */
    private $lastName;


    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("account_number")
     */
    private $accountNumber;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $company;

    /**
     * @var Address
     * @JMS\Type("mirolabs\dotpay\client\admin\model\Address")
     */
    private $address;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $firstName
     * @return \mirolabs\dotpay\client\admin\model\Payer
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     *
     * @param string $lastName
     * @return \mirolabs\dotpay\client\admin\model\Payer
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * IBAN
     * @param string $accountNumber
     * @return \mirolabs\dotpay\client\admin\model\Recipient
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @param string $company
     * @return \mirolabs\dotpay\client\admin\model\Recipient
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }


    /**
     * @param \mirolabs\dotpay\client\admin\model\Address $address
     * @return \mirolabs\dotpay\client\admin\model\Payer
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;
        return $this;
    }



}