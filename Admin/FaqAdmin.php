<?php

namespace Grossum\FaqBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class FaqAdmin extends Admin
{
    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add(
                'enabled',
                null,
                [
                    'label' => 'grossum_faq.admin.faq.enabled',
                ]
            )
            ->add(
                'question',
                null,
                [
                    'label' => 'grossum_faq.admin.faq.question',
                ]
            )
            ->add(
                'answer',
                null,
                [
                    'label' => 'grossum_faq.admin.faq.answer',
                ]
            )
            ->add(
                'position',
                null,
                [
                    'label' => 'grossum_faq.admin.faq.position',
                ]
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('enabled', null, ['label' => 'grossum_faq.admin.faq.enabled']);
    }

    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier(
                'question',
                null,
                [
                    'label' => 'grossum_faq.admin.faq.question',
                ]
            )
            ->add(
                'position',
                null,
                [
                    'label' => 'grossum_faq.admin.faq.position',
                ]
            );
    }
}
