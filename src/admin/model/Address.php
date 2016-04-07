<?php
namespace mirolabs\dotpay\client\admin\model;
use JMS\Serializer\Annotation as JMS;

class Address
{
    /**
     * @var string
     * @JMS\Type("string")
     */
    private $street;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("building_number")
     */
    private $buildingNumber;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("flat_number")
     */
    private $flatNumber;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $postcode;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $city;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $region;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $country;

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }


    /**
     * @return string
     */
    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }


    /**
     * @return string
     */
    public function getFlatNumber()
    {
        return $this->flatNumber;
    }


    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }


    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }


    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }


    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $street
     * @return \mirolabs\dotpay\client\admin\model\Address
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }


    /**
     * @param string $buildingNumber
     * @return \mirolabs\dotpay\client\admin\model\Address
     */
    public function setBuildingNumber($buildingNumber)
    {
        $this->buildingNumber = $buildingNumber;
        return $this;
    }


    /**
     * @param string $flatNumber
     * @return \mirolabs\dotpay\client\admin\model\Address
     */
    public function setFlatNumber($flatNumber)
    {
        $this->flatNumber = $flatNumber;
        return $this;
    }


    /**
     * @param string $postcode
     * @return \mirolabs\dotpay\client\admin\model\Address
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * @param string $city
     * @return \mirolabs\dotpay\client\admin\model\Address
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param string $region
     * @return \mirolabs\dotpay\client\admin\model\Address
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * ISO 3166-1 alfa-3
     * 
     * @param string $country
     * @return \mirolabs\dotpay\client\admin\model\Address
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }
}