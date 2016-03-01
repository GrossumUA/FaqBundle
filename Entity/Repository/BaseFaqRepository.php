<?php

namespace Grossum\FaqBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

use Grossum\FaqBundle\Entity\BaseFaq;

class BaseFaqRepository extends EntityRepository
{
    /**
     * @return BaseFaq[]
     */
    public function findAllEnabled()
    {
        return $this->findBy(['enabled' => true]);
    }
}
