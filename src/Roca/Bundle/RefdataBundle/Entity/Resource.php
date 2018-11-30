<?php

namespace Roca\Bundle\RefdataBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractCustomEntity;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractTranslatableCustomEntity;
use Pim\Component\ReferenceData\Model\AbstractReferenceData;
use spec\Pim\Bundle\CustomEntityBundle\Entity\CustomEntity;


/**
 * Resource
 *
 */
class Resource extends AbstractCustomEntity
{

    /**
     * @var string
     *
     */
    protected $container;


    /**
     * @var string
     */
    protected $entity;

    /**
     * @var string
     *
     */
    protected $sku;

    /**
     * @var string
     *
     */
    protected $contentType;

    /**
     * @var string
     *
     */
    protected $idObject;

    /**
     * @var string
     *
     */
    protected $idRoca;

    /**
     * @var string
     *
     */
    protected $file;


    /**
     * @var string
     *
     */
    protected $title;

    /**
     * @var boolean
     *
     */
    protected $delete;

    /**
     * @var boolean
     *
     */
    protected $publication;


    /**
     * @var ArrayCollection
     */
    protected $marketLocales;

    public function __construct()
    {
        $this->marketLocales = new ArrayCollection();
    }


    public function getCustomEntityName() : string
    {
        return 'resource';
    }

    /**
     * @return string
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @param string $container
     */
    public function setContainer($container)
    {
        $this->container = $container;
    }


    /**
     * @return string
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * @param string $entity
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * @return string
     */
    public function getIdObject()
    {
        return $this->idObject;
    }

    /**
     * @param string $idObject
     */
    public function setIdObject($idObject)
    {
        $this->idObject = $idObject;
    }

    /**
     * @return string
     */
    public function getIdRoca()
    {
        return $this->idRoca;
    }

    /**
     * @param string $idRoca
     */
    public function setIdRoca($idRoca)
    {
        $this->idRoca = $idRoca;
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param string $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return bool
     */
    public function isDelete()
    {
        return $this->delete;
    }

    /**
     * @param bool $delete
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;
    }

    /**
     * @return bool
     */
    public function isPublication()
    {
        return $this->publication;
    }

    /**
     * @param bool $publication
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;
    }

    /**
     * @return ArrayCollection
     */
    public function getMarketLocales()
    {
        return $this->marketLocales;
    }

    /**
     * @param ArrayCollection $marketLocales
     */
    public function setMarketLocales($marketLocales)
    {
        $this->marketLocales = $marketLocales;
    }



}
