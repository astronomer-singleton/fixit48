<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Genus;
use Doctrine\ORM\EntityRepository;

class RepRequestRepository extends EntityRepository
{
    /**
     * @return RepRequest[]
     */
    public function findAllOrderedByCreatedAt()
    {
        return $this->createQueryBuilder('rep_request')
            ->orderBy('rep_request.createdAt', 'DESC')
            ->getQuery()
            ->execute();
    }
}
