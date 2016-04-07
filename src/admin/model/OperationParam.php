<?php
namespace mirolabs\dotpay\client\admin\model;

class OperationParam
{

    /**
     * @var int
     */
    private $accountId;

    /**
     * @var OperationType
     */
    private $type;

    /**
     *
     * @var OperationStatus
     */
    private $status;

    /**
     *
     * @var \DateTime
     */
    private $creationDateFrom;

    /**
     *
     * @var \DateTime
     */
    private $creationDateTo;

    /**
     *
     * @var string
     */
    private $description;

    /**
     *
     * @var string
     */
    private $control;




    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @return OperationType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return OperationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDateFrom()
    {
        return $this->creationDateFrom;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDateTo()
    {
        return $this->creationDateTo;
    }

    /**
     * 
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     *
     * @return string
     */
    public function getControl()
    {
        return $this->control;
    }


    /**
     * @param int $accountId
     * @return \mirolabs\dotpay\client\admin\model\OperationParam
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     *
     * @param \mirolabs\dotpay\client\admin\model\OperationType $type
     * @return \mirolabs\dotpay\client\admin\model\OperationParam
     */
    public function setType(OperationType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     *
     * @param \mirolabs\dotpay\client\admin\model\OperationStatus $status
     * @return \mirolabs\dotpay\client\admin\model\OperationParam
     */
    public function setStatus(OperationStatus $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     *
     * @param \DateTime $creationDateFrom
     * @return \mirolabs\dotpay\client\admin\model\OperationParam
     */
    public function setCreationDateFrom(\DateTime $creationDateFrom)
    {
        $this->creationDateFrom = $creationDateFrom;
        return $this;
    }

    /**
     *
     * @param \DateTime $creationDateTo
     * @return \mirolabs\dotpay\client\admin\model\OperationParam
     */
    public function setCreationDateTo(\DateTime $creationDateTo)
    {
        $this->creationDateTo = $creationDateTo;
        return $this;
    }

    /**
     *
     * @param string $description
     * @return \mirolabs\dotpay\client\admin\model\OperationParam
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     *
     * @param string $control
     * @return \mirolabs\dotpay\client\admin\model\OperationParam
     */
    public function setControl($control)
    {
        $this->control = $control;
        return $this;
    }



    /**
     * @return array
     */
    public function toArray()
    {
        $result = [];
        if (!is_null($this->accountId)) {
            $result['account_id'] = $this->accountId;
        }
        if (!is_null($this->type)) {
            $result['type'] = $this->type->getType();
        }
        if (!is_null($this->status)) {
            $result['status'] = $this->status->getType();
        }
        if (!is_null($this->creationDateFrom)) {
            $result['creation_date_from'] = $this->creationDateFrom->format('Y-m-d');
        }
        if (!is_null($this->creationDateTo)) {
            $result['creation_date_to'] = $this->creationDateTo->format('Y-m-d');
        }
        if (!is_null($this->description)) {
            $result['description'] = $this->description;
        }
        if (!is_null($this->control)) {
            $result['control'] = $this->control;
        }
        return $result;
    }
}