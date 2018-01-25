<?php
namespace Logger\Domain\Model\Log;

use Doctrine\Common\Collections\ArrayCollection;

class Log
{
    /** @var integer */
    private $id;
    
    /** @var \DateTime */
    private $dateTime;
    
    /** @var integer */
    private $levelCode;
    
    /** @var string */
    private $levelName;

    /** @var string */
    private $invokedBy;
    
    /** @var Detail[] */
    private $details;
    
    public function __construct(
        \DateTime $dateTime,
        $levelCode,
        $levelName,
        $invokedBy
    )
    {
        $this->setDateTime($dateTime);
        $this->setLevelCode($levelCode);
        $this->setLevelName($levelName);
        $this->setInvokedBy($invokedBy);
        $this->details = new ArrayCollection();
    }
    /**
     * @return number
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @return number
     */
    public function getLevelCode()
    {
        return $this->levelCode;
    }

    /**
     * @return string
     */
    public function getLevelName()
    {
        return $this->levelName;
    }

    /**
     * @return string
     */
    public function getInvokedBy()
    {
        return $this->invokedBy;
    }

    /**
     * @return multitype:\Logger\Log\Detail 
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param \DateTime $dateTime
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
    }

    /**
     * @param number $levelCode
     */
    public function setLevelCode($levelCode)
    {
        $this->levelCode = $levelCode;
    }

    /**
     * @param string $levelName
     */
    public function setLevelName($levelName)
    {
        $this->levelName = $levelName;
    }

    /**
     * @param string $invokedBy
     */
    public function setInvokedBy($invokedBy)
    {
        $this->invokedBy = $invokedBy;
    }

    /**
     * @param multitype:\Logger\Log\Detail  $details
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }    
}

