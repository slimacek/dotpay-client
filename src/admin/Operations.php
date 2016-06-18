<?php
namespace mirolabs\dotpay\client\admin;

class Operations extends Admin
{

    /**
     *
     * @param \mirolabs\dotpay\client\admin\model\OperationParam $param
     * @param int $page
     * @return \mirolabs\dotpay\client\admin\model\Pageable
     */
    public function getOperatons(model\OperationParam $param, $page = 1)
    {
        return $this->getQuery('operations/', $param->toArray(), $page, 'array<mirolabs\dotpay\client\admin\model\Operation>');
    }

    /**
     *
     * @param string $number
     * @return mirolabs\dotpay\client\admin\model\Operation
     */
    public function getOperation($number)
    {
        return $this->getObject('operations/' .  $number . '/', 'mirolabs\dotpay\client\admin\model\Operation');
    }

    /**
     *
     * @param string $number
     * @return mirolabs\dotpay\client\admin\model\Operation
     */
    public function getOperationsPayout($number)
    {
        return $this->getPageable('operations/' .  $number . '/operations/',1, 'array<mirolabs\dotpay\client\admin\model\Operation>');
    }
}