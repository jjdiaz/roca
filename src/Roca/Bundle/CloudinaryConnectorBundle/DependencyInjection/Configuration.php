<?php
/**
 * Created by ASM Web Services.
 * @date:   23/11/2018 12:58
 * @author:     Joaquín Jiménez <jjimenez@asmws.com>
 * @copyright   2018 ASM Web Services (http://asmws.com)
 *
 */

namespace Roca\Bundle\CloudinaryConnectorBundle\DependencyInjection;

use Oro\Bundle\ConfigBundle\DependencyInjection\SettingsBuilder;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder  = new TreeBuilder();

        $rootNode = $treeBuilder->root('asm_cloudinary_connector');

        $children = $rootNode->children()
            ->scalarNode('cloud_name')->end()
            ->scalarNode('api_key')->end()
            ->scalarNode('api_secret')->end()
            ->scalarNode('environment_variable')->end();
    $children->end();
    $rootNode->end();

    SettingsBuilder::append(
        $rootNode,[
            'cloud_name'            => ['value' => null],
            'api_key'               => ['value' => null],
            'api_secret'            => ['value' => null],
            'environment_variable'  => ['value' => null],
    ]);

    return $treeBuilder;
    }
}