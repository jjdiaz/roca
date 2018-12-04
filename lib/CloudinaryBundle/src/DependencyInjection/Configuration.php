<?php
/**
 * Created by ASM Web Services.
 * @date:   23/11/2018 12:58
 * @author:     Joaquín Jiménez <jjimenez@asmws.com>
 * @copyright   2018 ASM Web Services (http://asmws.com)
 *
 */

namespace Asm\Bundle\CloudinaryBundle\DependencyInjection;

use Oro\Bundle\ConfigBundle\DependencyInjection\SettingsBuilder;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author    Jean-Marie Leroux <jean-marie.leroux@akeneo.com>
 * @copyright 2016 TextMaster.com (https://textmaster.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $rootNode = $treeBuilder->root('cloudinary');

        $rootNode->children()
            ->scalarNode('cloud_name')->end()
            ->scalarNode('api_key ')->end()
            ->scalarNode('api_secret')->end()

            ->end();

        $rootNode->end();

        SettingsBuilder::append(
            $rootNode,
            [
                'cloud_name' => ['value' => null],
                'api_key' => ['value' => null],
                'api_secret' => ['value' => null],

            ]
        );

        return $treeBuilder;
    }
}