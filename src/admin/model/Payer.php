<?php
namespace mirolabs\dotpay\client\admin\model;
use JMS\Serializer\Annotation as JMS;

class Payer
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
     */
    private $email;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $phone;

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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
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
     * @param string $email
     * @return \mirolabs\dotpay\client\admin\model\Payer
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param string $phone
     * @return \mirolabs\dotpay\client\admin\model\Payer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
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