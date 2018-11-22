<?php
/**
 * Created by ASM Web Services.
 * @date:   14/10/2018 15:45
 * @author:     Joaquín Jiménez <jjimenez@asmws.com>
 * @copyright   2018 ASM Web Services (http://asmws.com)
 *
 */

namespace Roca\Bundle\EnrichBundle\Resources\config\doctrine\ORM\Repository;

use Pim\Bundle\CatalogBundle\Doctrine\ORM\Repository\AttributeRepository as BaseAttributeRepository;

class AttributeRepository extends BaseAttributeRepository
{
    /**
     * {@inheritdoc}
     */
    protected function findWithGroupsQB(array $attributeIds = [], array $criterias = [])
    {
        $qb = parent::findWithGroupsQB($attributeIds, $criterias);

        if (isset($criterias['filters'])) {
            foreach ($criterias['filters'] as $field => $subQB) {
                $qb->andWhere(
                    $qb->expr()->in($field, $subQB->getDQL())
                );
                $qb->setParameters($subQB->getParameters());
            }
        }

        return $qb;
    }
}