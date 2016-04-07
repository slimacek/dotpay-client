<?php
namespace mirolabs\dotpay\client\admin;

class Accounts extends Admin
{
    /**
     * @param int $page
     * @return model\Pageable
     */
    public function getAccounts($page = 1)
    {
        return $this->getPageable('accounts', $page, 'array<mirolabs\dotpay\client\admin\model\Account>');
    }

    /**
     * @param int $accountId
     * @return model\Account
     */
    public function getAccount($accountId)
    {
        return $this->getObject('accounts/' .  $accountId . '/', 'mirolabs\dotpay\client\admin\model\Account');
    }

    /**
     * @param int $accountId
     * @return model\Channel[]
     */
    public function getChannels($accountId)
    {
        return $this->getArray('accounts/' .  $accountId . '/channels/', 'mirolabs\dotpay\client\admin\model\Channel');
    }

    /**
     *
     * @param int $accountId
     * @param model\PaymentLink $paymentLink
     * @return model\PaymentLink
     */
    public function createPaymentLink($accountId, model\PaymentLink $paymentLink)
    {
        return $this->sendPostByObject('accounts/' .  $accountId . '/payment_links/', $paymentLink,
            'mirolabs\dotpay\client\admin\model\PaymentLink');
    }

    /**
     * @param int $accountId
     * @param int $page
     * @return model\Pageable
     */
    public function getPaymentLinks($accountId, $page = 1)
    {
        return $this->getPageable('accounts/' .  $accountId . '/payment_links/', $page,
            'array<mirolabs\dotpay\client\admin\model\PaymentLink>');
    }

    /**
     *
     * @param int $accountId
     * @param string $token
     */
    public function deletePaymentLink($accountId, $token)
    {
        return $this->delete('accounts/' .  $accountId . '/payment_links/' . $token . '/');
    }

    /**
     * @param int $accountId
     * @param string $token
     * @return model\PaymentLink
     */
    public function getPaymentLink($accountId, $token)
    {
        return $this->getObject('accounts/' .  $accountId . '/payment_links/' . $token . '/',
            'mirolabs\dotpay\client\admin\model\PaymentLink');
    }


    /**
     *
     * @param int $accountId
     * @param model\TransferRequest $request
     * @return model\TransferStatus
     */
    public function createTransfers($accountId, model\TransferRequest $request)
    {
        return $this->sendPostByObject('accounts/' .  $accountId . '/payout/', $request,
            'mirolabs\dotpay\client\admin\model\TransferStatus');
    }
}