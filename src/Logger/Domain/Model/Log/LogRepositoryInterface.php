<?php
namespace Logger\Domain\Model\Log;

interface LogRepositoryInterface
{
    /** @param Log $log */
    public function add(Log $log);
    
    /**
     *  Removes log from repository
     *   @param Log $log
     */
    public function remove(Log $log);
    
    /**
     * @param integer $id
     * return Log
     */
    public function ofId($id);
    
    public function setIdTable($idTable);
}

