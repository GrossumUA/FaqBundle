<?php

namespace Grossum\FaqBundle\Entity\EntityManager;

use Doctrine\Common\Persistence\ObjectManager;

use Grossum\CoreBundle\Entity\EntityTrait\SaveUpdateInManagerTrait;
use Grossum\FaqBundle\Entity\Repository\BaseFaqRepository;

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
     * @var BaseFaqRepository
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
     * @return BaseFaqRepository
     */
    public function getRepository()
    {
        if ($this->repository === null) {
            $this->repository = $this->objectManager->getRepository($this->faqClass);
        }

        return $this->repository;
    }
}
