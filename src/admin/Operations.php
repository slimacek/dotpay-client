<?php
namespace mirolabs\dotpay\client\admin;

class Operations extends Admin
{

    /**
     *
     * @param \mirolabs\dotpay\client\admin\model\OperationParam $param
     * @param type $page
     * @return type
     */
    public function getOperatons(model\OperationParam $param, $page = 1)
    {
        return $this->getQuery('accounts', $param->toArray(), $page, 'array<mirolabs\dotpay\client\admin\model\Operation>');
    }
}