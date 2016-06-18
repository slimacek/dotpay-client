<?php
namespace mirolabs\dotpay\client\admin\model;

class OperationType
{
    const PAYMENT = 'payment';
    const PAYMENT_MULTIMERCHANT_CHILD = 'payment_multimerchant_child';
    const PAYOUT = 'payout';
    const COMPLAINT = 'complaint';
    const RELEASE_ROLLBACK = 'release_rollback';
    const PAYOUT_ANY_AMOUNT = 'payout_any_amount';

        /**
     * @var string
     */
    private $type;

    public function __construct($type)
    {
        if (!in_array($type, self::getAllTypes())) {
            throw new \Exception('Invalid Operation type');
        }
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public static function get($type)
    {
        return new OperationType($type);
    }

    public static function getAllTypes()
    {
        return [
            self::PAYMENT,
            self::PAYMENT_MULTIMERCHANT_CHILD,
            self::PAYOUT,
            self::COMPLAINT,
            self::RELEASE_ROLLBACK,
            self::PAYOUT_ANY_AMOUNT
        ];
    }
}