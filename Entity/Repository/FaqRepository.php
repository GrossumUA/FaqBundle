<?php

namespace Grossum\FaqBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;
use Grossum\FaqBundle\Entity\Faq;

class FaqRepository extends EntityRepository
{
    /**
     * @return Faq[]
     */
    public function findAllEnabled()
    {
        return $this
            ->_em
            ->createQuery('
                SELECT faq
                FROM GrossumFaqBundle:Faq AS faq
                WHERE faq.enabled = true
            ')
            ->getResult();
    }
}
