<?php
namespace Logger\Domain\Model\Log;

class Detail
{
    /** @var integer */
    private $id;
    
    /** @var Log */
    private $log;
    
    /** @var string */
    private $detailKey;
    
    /** @var string */
    private $detailValue;
    
    public function __construct(
        Log $log,
        $detailKey,
        $detailValue
    )
    {
        $this->setLog($log);
        $this->setDetailKey($detailKey);
        $this->setDetailValue($detailValue);
    }
    /**
     * @return number
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \Logger\Domain\Model\Log\Log
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * @return string
     */
    public function getDetailKey()
    {
        return $this->detailKey;
    }

    /**
     * @return string
     */
    public function getDetailValue()
    {
        return $this->detailValue;
    }

    /**
     * @param \Logger\Domain\Model\Log\Log $log
     */
    public function setLog($log)
    {
        $this->log = $log;
    }

    /**
     * @param string $detailKey
     */
    public function setDetailKey($detailKey)
    {
        $this->detailKey = $detailKey;
    }

    /**
     * @param string $detailValue
     */
    public function setDetailValue($detailValue)
    {
        $this->detailValue = $detailValue;
    }
}

