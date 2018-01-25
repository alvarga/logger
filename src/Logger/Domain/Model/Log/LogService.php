<?php
namespace Logger\Domain\Model\Log;

class LogService
{
    const DEBUG = 100;
    const INFO = 200;
    const NOTICE = 250;
    const WARNING = 300;
    const ERROR = 400;
    const CRITICAL = 500;
    const ALERT = 550;
    const EMERGENCY = 600;
    
    const TYPE_DESCRIPTION = [
        self::DEBUG => "DEBUG",
        self::INFO => "INFO",
        self::NOTICE => "NOTICE",
        self::WARNING => "WARNING",
        self::ERROR => "ERROR",
        self::CRITICAL => "CRITICAL",
        self::ALERT => "ALERT",
        self::EMERGENCY => "EMERGENCY"
    ];
    
    /** @var LogRepositoryInterface */
    private $logRepository;
    
    public function __construct(
        LogRepositoryInterface $logRepository
        )
    {
        $this->logRepository = $logRepository;
    }
    
    public function debug($details, $service)
    {
        return $this->generateLog(self::DEBUG, $details, $service);
    }
    
    public function info($details, $service)
    {
        return $this->generateLog(self::INFO, $details, $service);
    }
    
    public function notice($details, $service)
    {
        return $this->generateLog(self::NOTICE, $details, $service);
    }
    
    public function warning($details, $service)
    {
        return $this->generateLog(self::WARNING, $details, $service);
    }
    
    public function error($details, $service)
    {
        return $this->generateLog(self::ERROR, $details, $service);
    }
    
    public function critical($details, $service)
    {
        return $this->generateLog(self::CRITICAL, $details, $service);
    }
    
    public function alert($details, $service)
    {
        return $this->generateLog(self::ALERT, $details, $service);
    }
    
    public function emergency($details, $service)
    {
        return $this->generateLog(self::EMERGENCY, $details, $service);
    }
    
    private function generateLog($type, $details, $service)
    {
        $detailsArr = array();
        $logObj = new Log(new \DateTime(), $type, self::TYPE_DESCRIPTION[$type], $service);
        if(count($details) > 0)
        {
            foreach($details as $key => $value)
            {
                $detailsArr[] = new Detail($logObj, $key, $value);
            }
            $logObj->setDetails($detailsArr);
        }
        $this->logRepository->add($logObj);
        return $logObj;
    }
}

