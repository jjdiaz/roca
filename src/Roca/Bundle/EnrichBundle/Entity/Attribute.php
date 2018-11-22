<?php
/**
 * Created by ASM Web Services.
 * @date:   14/10/2018 11:52
 * @author:     Joaquín Jiménez <jjimenez@asmws.com>
 * @copyright   2018 ASM Web Services (http://asmws.com)
 *
 */

namespace Roca\Bundle\EnrichBundle\Entity;

use Pim\Bundle\CatalogBundle\Entity\Attribute as PimAttribute;
use Pim\Component\Catalog\Model\AbstractAttribute;
use Symfony\Component\Validator\Constraints as Assert;

class Attribute extends PimAttribute
{
    /** @var bool */
    protected $marketizable;

    /**
     * @return bool
     */
    public function isMarketizable(): bool
    {
        return $this->marketizable;
    }

    /**
     * @param bool $marketizable
     */
    public function setMarketizable(bool $marketizable): void
    {
        $this->marketizable = $marketizable;
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupSequence()
    {
        $groups = ['Attribute', $this->getType()];

        if ($this->isUnique()) {
            $groups[] = 'unique';
        }
        if ($this->isScopable()) {
            $groups[] = 'scopable';
        }
        if ($this->isLocalizable()) {
            $groups[] = 'localizable';
        }
        if ($this->isMarketizable()) {
            $groups[] = 'marketizable';
        }

        if ($rule = $this->getValidationRule()) {
            $groups[] = $rule;
        }

        return $groups;
    }
}