<?php

// src/Flyaround/MapBundle/Admin/TerrainAdmin.php

namespace Flyaround\MapBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;


class TerrainAdmin extends Admin
{
    // setup the default sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'ASC',
        '_sort_by' => 'name'
    );
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('iCAO')
            ->add('iATA')
            ->add('country')
            ->add('city')
            ->add('town')
            ->add('latitude')
            ->add('longitude')
            ->add('timezone')
            ->add('departement')
            ->add('dac')
            ->add('restreint')
            ->add('ulm')
            ->add('heliStation')
            ->add('vac')
            ->add('touchAndGoPrice')
            ->add('landingPrice')
            ->add('dayLawnPrice')
            ->add('hangarPrice')
            ->add('altiport')
            ->add('region')
            ->add('phone')
            ->add('published')
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('iCAO')
            ->add('iATA')
            ->add('country')
            ->add('city')
        ;
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('iCAO')
            ->add('iATA')
            ->add('country')
            ->add('city')
            ->add('town')
            ->add('published')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name')
            ->add('iCAO')
            ->add('iATA')
            ->add('country')
            ->add('city')
            ->add('town')
            ->add('latitude')
            ->add('longitude')
            ->add('timezone')
            ->add('departement')
            ->add('dac')
            ->add('restreint')
            ->add('ulm')
            ->add('heliStation')
            ->add('vac')
            ->add('touchAndGoPrice')
            ->add('landingPrice')
            ->add('dayLawnPrice')
            ->add('hangarPrice')
            ->add('altiport')
            ->add('region')
            ->add('phone')
            ->add('published')
            ->add('createdAt')
        ;
    }
}