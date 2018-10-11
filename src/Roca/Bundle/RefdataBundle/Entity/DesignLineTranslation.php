<?php

namespace Roca\Bundle\RefdataBundle\Entity;

use Akeneo\Component\Localization\Model\AbstractTranslation;
use Akeneo\Component\Localization\Model\TranslationInterface;
use Pim\Component\Catalog\Model\FamilyTranslationInterface;

/**
 * DesignLineTranslation entity
 *
 * @author    J
 * @copyright 2017 ASMWS
 */
class DesignLineTranslation extends AbstractTranslation implements TranslationInterface
{
    /** @var string */
    protected $title;

    /** @var string */
    protected $lead;

    /** @var string */
    protected $designersReflectionTitle;

    /** @var string */
    protected $designersReflection;

    /** @var string */
    protected $technicalDescription;

    /** @var string */
    protected $summary;

    /** @var string */
    protected $subtitle;

    /** @var string */
    protected $mkDescription;

    /** @var string */
    protected $designlineTitle;


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
     * @return string
     */
    public function getLead()
    {
        return $this->lead;
    }

    /**
     * @param string $lead
     */
    public function setLead($lead)
    {
        $this->lead = $lead;
    }




    /**
     * @return string
     */
    public function __toString()
    {
        return (string) 'DesignLineTranslation:'.$this->getTitle();
    }

    /**
     * @return string
     */
    public function getDesignersReflectionTitle()
    {
        return $this->designersReflectionTitle;
    }

    /**
     * @param string $designersReflectionTitle
     */
    public function setDesignersReflectionTitle($designersReflectionTitle)
    {
        $this->designersReflectionTitle = $designersReflectionTitle;
    }

    /**
     * @return string
     */
    public function getDesignersReflection()
    {
        return $this->designersReflection;
    }

    /**
     * @param string $designersReflection
     */
    public function setDesignersReflection($designersReflection)
    {
        $this->designersReflection = $designersReflection;
    }

    /**
     * @return string
     */
    public function getTechnicalDescription()
    {
        return $this->technicalDescription;
    }

    /**
     * @param string $technicalDescription
     */
    public function setTechnicalDescription($technicalDescription)
    {
        $this->technicalDescription = $technicalDescription;
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    /**
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * @param string $subtitle
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }

    /**
     * @return string
     */
    public function getMkDescription()
    {
        return $this->mkDescription;
    }

    /**
     * @param string $mkDescription
     */
    public function setMkDescription($mkDescription)
    {
        $this->mkDescription = $mkDescription;
    }

    /**
     * @return string
     */
    public function getDesignlineTitle()
    {
        return $this->designlineTitle;
    }

    /**
     * @param string $designlineTitle
     */
    public function setDesignlineTitle($designlineTitle)
    {
        $this->designlineTitle = $designlineTitle;
    }

}
