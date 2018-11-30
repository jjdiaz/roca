<?php

namespace Roca\Bundle\RefdataBundle\Entity;

use Akeneo\Component\Localization\Model\AbstractTranslation;
use Akeneo\Component\Localization\Model\TranslationInterface;
use Pim\Component\Catalog\Model\FamilyTranslationInterface;

/**
 * Family translation entity
 *
 * @author    Gildas Quemener <gildas@akeneo.com>
 * @copyright 2013 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class DesignerTranslation extends AbstractTranslation implements TranslationInterface
{
    /** All required columns are mapped through inherited superclass */

    /** Change foreign key to add constraint and work with basic entity */
    protected $foreignKey;

    /** @var string */
    protected $descriptionName;

    /** @var string */
    protected $descriptionLead;

    /** @var string */
    protected $descriptionResume;

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
    public function getDescriptionResume()
    {
        return $this->descriptionResume;
    }

    /**
     * @param string $descriptionResume
     */
    public function setDescriptionResume($descriptionResume)
    {
        $this->descriptionResume = $descriptionResume;
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
    public function __toString()
    {
        return (string) 'Designer:'.$this->descriptionName;
    }
}
