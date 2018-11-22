<?php

namespace Roca\Bundle\RefdataBundle\Entity;

use ASM\Bundle\ASMBundle\Service\UtilsService;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractCustomEntity;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractTranslatableCustomEntity;


/**
 * ExportAttribute
 *
 */
class ExportAttribute extends AbstractTranslatableCustomEntity
{


    /**
     * @var string
     *
     * equivale al acronym
     *
     */
    private $name;

    /**
     * @var string
     *
     */
    private $path;

    /**
     * @var string
     *
     */
    private $type;


    /**
     * @var string
     *
     */
    private $entity;


    /**
     * @var string
     *
     * cuando el item name del xml no equivale al name
     *
     */
    private $acronym;

    /**
     * @var string
     *
     * jerarquia de atributos
     * p.ej: 00.01_BASINS
     * p.ej: 00.06_URINALS
     *
     */
    private $hierarchy;

    /**
     * @var string
     *
     */
    private $attributeName;


    public function getTranslationFQCN()
    {
        return 'Roca\Bundle\RefdataBundle\Entity\ExportAttributeTranslation';
    }

    /**
     * Set type
     *
     * @param string $type
     * @return ExportAttribute
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;

        $this->setAttributeName( UtilsService::convertToAttributeName($path));
    }

    public function getCustomEntityName() : string
    {
        return 'exportattribute';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getAcronym()
    {
        return $this->acronym;
    }

    /**
     * @param string $acronym
     */
    public function setAcronym($acronym)
    {
        $this->acronym = $acronym;
    }

    /**
     * @return string
     */
    public function getHierarchy()
    {
        return $this->hierarchy;
    }

    /**
     * @param string $hierarchy
     */
    public function setHierarchy($hierarchy)
    {
        $this->hierarchy = $hierarchy;
    }

    /**
     * @return string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @param string $attributeName
     */
    public function setAttributeName($attributeName)
    {
        $this->attributeName = $attributeName;
    }



}
