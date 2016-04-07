<?php
namespace mirolabs\dotpay\client\admin\model;
use JMS\Serializer\Annotation as JMS;

class TransferStatus
{
    /**
     * @var string
     * @JMS\Type("string")
     */
    private $detail;

    /**
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     *
     * @param string $detail
     * @return \mirolabs\dotpay\client\admin\model\TransferStatus
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
        return $this;
    }

}