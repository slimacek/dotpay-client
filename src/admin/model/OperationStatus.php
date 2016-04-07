<?php
namespace mirolabs\dotpay\client\admin\model;

class OperationStatus
{
    const _NEW = 'new';
    const ACTIVE = 'active';
    const PROCESSING = 'processing';
    const COMPLETED = 'completed';
    const REJECTED = 'rejected';
    const PROCESSING_REALIZATION_WAITING = 'processing_realization_waiting';
    const PROCESSING_REALIZATION = 'processing_realization';

    /**
     * @var string
     */
    private $type;

    public function __construct($type)
    {
        if (!in_array($type, self::getAllTypes())) {
            throw new \Exception('Invalid Operation status');
        }
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public static function get($type)
    {
        return new OperationStatus($type);
    }

    public static function getAllTypes()
    {
        return [
            self::_NEW,
            self::ACTIVE,
            self::PROCESSING,
            self::COMPLETED,
            self::REJECTED,
            self::PROCESSING_REALIZATION_WAITING,
            self::PROCESSING_REALIZATION
        ];
    }

}