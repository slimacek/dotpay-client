<?php
namespace mirolabs\dotpay\client\admin\model;

class Pageable
{
    /**
     * @var int
     */
    private $count;

    /**
     * @var int
     */
    private $current;

    /**
     * @var array
     */
    private $result;

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return int
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * @return array
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     *
     * @param int $count
     * @return \mirolabs\dotpay\client\admin\model\Pageable
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @param int $current
     * @return \mirolabs\dotpay\client\admin\model\Pageable
     */
    public function setCurrent($current)
    {
        $this->current = $current;
        return $this;
    }

    /**
     * @param int $result
     * @return \mirolabs\dotpay\client\admin\model\Pageable
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}