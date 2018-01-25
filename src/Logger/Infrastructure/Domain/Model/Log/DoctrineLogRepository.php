<?php
namespace Logger\Infrastructure\Domain\Model\Log;

use Logger\Domain\Model\Log\LogRepositoryInterface;
use Logger\Domain\Model\Log\Log;
use Doctrine\ORM\EntityManager;

class DoctrineLogRepository extends EntityManager implements LogRepositoryInterface
{
    /**
     * 
     * {@inheritDoc}
     * @see \Logger\Domain\Model\Log\LogRepositoryInterface::add()
     */
    public function add(Log $log)
    {
        $this->getEntityManager()->persist($log);
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \Logger\Domain\Model\Log\LogRepositoryInterface::remove()
     */
    public function remove(Log $log)
    {
        $this->getEntityManager()->remove($log);
    }
}

