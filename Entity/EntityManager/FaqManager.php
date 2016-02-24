<?php

namespace Grossum\FaqBundle\Entity\EntityManager;

use Doctrine\Common\Persistence\ObjectManager;

use Grossum\CoreBundle\Entity\EntityTrait\SaveUpdateInManagerTrait;
use Grossum\FaqBundle\Entity\Repository\FaqRepository;

class FaqManager
{
    use SaveUpdateInManagerTrait;

    /**
     * @var string
     */
    private $faqClass;

    /**
     * @var ObjectManager
     */
    private $objectManager;

    /**
     * @var FaqRepository
     */
    private $repository;

    /**
     * @param ObjectManager $objectManager
     * @param string $faqClass
     */
    public function __construct(ObjectManager $objectManager, $faqClass)
    {
        $this->objectManager = $objectManager;
        $this->faqClass = $faqClass;
    }

    /**
     * @return FaqRepository
     */
    public function getRepository()
    {
        if ($this->repository === null) {
            $this->repository = $this->objectManager->getRepository($this->faqClass);
        }

        return $this->repository;
    }
}
