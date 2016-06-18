<?php
namespace mirolabs\dotpay\client\admin;

class Payments extends Admin
{
    /**
     * @param int $page
     * @return \mirolabs\dotpay\client\admin\model\Pageable
     */
    public function getPayments($page = 1)
    {
        return $this->getPageable('payments/', $page, 'array<mirolabs\dotpay\client\admin\model\Operation>');
    }

    /**
     *
     * @param string $number
     * @return mirolabs\dotpay\client\admin\model\Operation
     */
    public function getPayment($number)
    {
        return $this->getObject('payments/' .  $number . '/', 'mirolabs\dotpay\client\admin\model\Operation');
    }
}