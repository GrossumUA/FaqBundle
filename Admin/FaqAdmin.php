<?php

namespace Grossum\FaqBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type as FormType;
use Grossum\FaqBundle\Entity\EntityManager\FaqManager;

class FaqAdmin extends Admin
{
    /**
     * @var FaqManager
     */
    private $faqManager;

    /**
     * Fields to be shown on create/edit forms
     *
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('enabled')
            ->add('question')
            ->add('answer')
            ->add('position', FormType\IntegerType::class);
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('enabled');
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('question')
            ->add('position');
    }

    /**
     * @param FaqManager $faqManager
     */
    public function setFaqManager(FaqManager $faqManager)
    {
        $this->faqManager = $faqManager;
    }
}
