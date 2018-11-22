<?php

namespace Roca\Bundle\RefdataBundle\Entity;

use Akeneo\Component\Localization\Model\AbstractTranslation;
use Akeneo\Component\Localization\Model\TranslationInterface;
use Pim\Component\Catalog\Model\FamilyTranslationInterface;

/**
 * Distinction translation entity
 *
 * @author    Gildas Quemener <gildas@akeneo.com>
 * @copyright 2013 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class DistinctionTranslation extends AbstractTranslation implements TranslationInterface
{
    /** All required columns are mapped through inherited superclass */

    /** Change foreign key to add constraint and work with basic entity */
    protected $foreignKey;

    /** @var string */
    protected $descriptionName;

    /** @var string */
    protected $descriptionCategory;

    /** @var string */
    protected $descriptionLead;

    /** @var string */
    protected $descriptionBody;


    /**
     * @return string
     */
    public function getDescriptionLead()
    {
        return $this->descriptionLead;
    }

    /**
     * @param string $descriptionLead
     */
    public function setDescriptionLead($descriptionLead)
    {
        $this->descriptionLead = $descriptionLead;
    }

    /**
     * @return string
     */
    public function getDescriptionName()
    {
        return $this->descriptionName;
    }

    /**
     * @param string $descriptionName
     */
    public function setDescriptionName($descriptionName)
    {
        $this->descriptionName = $descriptionName;
    }

    /**
     * @return string
     */
    public function getDescriptionCategory()
    {
        return $this->descriptionCategory;
    }

    /**
     * @param string $descriptionCategory
     */
    public function setDescriptionCategory($descriptionCategory)
    {
        $this->descriptionCategory = $descriptionCategory;
    }

    /**
     * @return string
     */
    public function getDescriptionBody()
    {
        return $this->descriptionBody;
    }

    /**
     * @param string $descriptionBody
     */
    public function setDescriptionBody($descriptionBody)
    {
        $this->descriptionBody = $descriptionBody;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string) 'DistinctionTranslation:'.$this->getLocale();
    }
}
