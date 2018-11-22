<?php

namespace Roca\Bundle\RefdataBundle\Entity;

use Pim\Bundle\CustomEntityBundle\Entity\AbstractCustomEntity;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractTranslatableCustomEntity;
use Pim\Component\ReferenceData\Model\AbstractReferenceData;


/**
 * Brand
 *
 */
class Finish extends AbstractCustomEntity
{

    /**
     * @var string
     */
    protected $descrition;

    /**
     * @var string
     */
    protected $finishkey;

    /**
     * @var string
     */
    protected $resourcefile;

    /**
     * @var string
     */
    protected $resourcetitle;

    /**
     * @return string
     */
    public function getDescrition(): string
    {
        return $this->descrition;
    }

    /**
     * @param string $descrition
     */
    public function setDescrition(string $descrition): void
    {
        $this->descrition = $descrition;
    }

    /**
     * @return string
     */
    public function getFinishkey(): string
    {
        return $this->finishkey;
    }

    /**
     * @param string $finishkey
     */
    public function setFinishkey(string $finishkey): void
    {
        $this->finishkey = $finishkey;
    }

    /**
     * @return string
     */
    public function getResourcefile(): string
    {
        return $this->resourcefile;
    }

    /**
     * @param string $resourcefile
     */
    public function setResourcefile(string $resourcefile): void
    {
        $this->resourcefile = $resourcefile;
    }

    /**
     * @return string
     */
    public function getResourcetitle(): string
    {
        return $this->resourcetitle;
    }

    /**
     * @param string $resourcetitle
     */
    public function setResourcetitle(string $resourcetitle): void
    {
        $this->resourcetitle = $resourcetitle;
    }


    public function getCustomEntityName() : string
    {
        return 'finish';
    }



}
