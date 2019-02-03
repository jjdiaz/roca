<?php
/**
 * Created by ASM Web Services.
 * @date:   01/02/2019 20:42
 * @author:     Joaquín Jiménez <jjimenez@asmws.com>
 * @copyright   2018 ASM Web Services (http://asmws.com)
 *
 */

namespace Roca\Bundle\MarketizableBundle\Entity;

use Pim\Bundle\CatalogBundle\Entity\Category as BaseCategory;

class Category extends BaseCategory
{
    protected $description;

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}