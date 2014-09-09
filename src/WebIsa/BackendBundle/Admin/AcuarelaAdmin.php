<?php
// src/WebIsa/BackendBundle/Admin/AcuarelaAdmin.php

namespace WebIsa\BackendBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class AcuarelaAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('tecnica', 'entity', array('class' => 'WebIsa\BackendBundle\Entity\Tecnica'))
            ->add('tamaño', 'text', array('label' => 'tamaño'))
            ->add('precio', 'text', array('label' => 'precio'))
            ->add('estado', 'boolean', array('editable' => 'true'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('tecnica')
            ->add('tamaño')
            ->add('precio')
            ->add('estado')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('tecnica')
            ->add('tamaño')
            ->add('precio')
            ->add('estado')
        ;
    }
}

