<?php

namespace Roca\Bundle\RefdataBundle\Entity;

use Pim\Bundle\CustomEntityBundle\Entity\AbstractCustomEntity;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractTranslatableCustomEntity;
use Pim\Component\ReferenceData\Model\AbstractReferenceData;


/**
 * Brand
 *
 */
class Brand extends AbstractCustomEntity
{

    /**
     * @var string
     *
     */
    protected $name;

    public function getCustomEntityName() : string
    {
        return 'brand';
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


}
