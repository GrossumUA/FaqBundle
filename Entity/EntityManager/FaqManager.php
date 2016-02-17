<?php

namespace Grossum\FaqBundle\Entity\EntityManager;

use Doctrine\Common\Persistence\ObjectManager;
use Grossum\CoreBundle\Entity\EntityTrait\SaveUpdateInManagerTrait;
use Grossum\FaqBundle\Entity\Repository\FaqRepository;
use Grossum\FaqBundle\Entity\Faq;

class FaqManager
{
    use SaveUpdateInManagerTrait;

    /**
     * @var FaqRepository
     */
    private $repository;

    /**
     * @var ObjectManager
     */
    private $objectManager;

    /**
     * @param ObjectManager $objectManager
     */
    public function __construct(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
        $this->repository    = $objectManager->getRepository('GrossumFaqBundle:Faq');
    }

    /**
     * @return Faq[]
     */
    public function findAllEnabled()
    {
        return $this->repository->findAllEnabled();
    }
}
