<?php

namespace Grossum\FaqBundle\Entity\EntityManager;

use Doctrine\Common\Persistence\ObjectManager;
use Grossum\CoreBundle\Entity\EntityTrait\SaveUpdateInManagerTrait;
use Grossum\FaqBundle\Entity\Repository\FaqRepository;

class FaqManager
{
    use SaveUpdateInManagerTrait;

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
    }

    /**
     * @return FaqRepository
     */
    private function getRepository()
    {
        return $this->objectManager->getRepository('GrossumFaqBundle:Faq');
    }
}
