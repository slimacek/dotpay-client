<?php
namespace mirolabs\dotpay\client\admin\model;
use JMS\Serializer\Annotation as JMS;


class TransferRequest
{
    /**
     * @var string
     * @JMS\Type("string")
     */
    private $currency;

    /**
     * @var Transfer[]
     * @JMS\Type("array<mirolabs\dotpay\client\admin\model\Transfer>")
     */
    private $transfers;

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return Transfer[]
     */
    public function getTransfers()
    {
        return $this->transfers;
    }

    /**
     * @param string $currency
     * @return \mirolabs\dotpay\client\admin\model\TransferRequest
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @param array $transfers
     * @return \mirolabs\dotpay\client\admin\model\TransferRequest
     */
    public function setTransfers(array $transfers)
    {
        $this->transfers = $transfers;
        return $this;
    }


}