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
use Symfony\Component\VarDumper\VarDumper;

class Configuration implements ConfigurationInterface
{

    /**
     * {@inheritDoc}
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder  = new TreeBuilder();

        $rootNode = $treeBuilder->root('asm_cloudinary');

        $rootNode->children()
            ->scalarNode('cloud_name')->end()
            ->scalarNode('api_key')->end()
            ->scalarNode('api_secret')->end()
            ->scalarNode('environment_variable')->end()
            ->end();
        $rootNode->end();

        SettingsBuilder::append(
            $rootNode,
            [
                'api_key' => ['value' => null],
                'api_secret' => ['value' => null],
                'attributes' => ['value' => null],
            ]
        );
        VarDumper::dump($treeBuilder);;
    return $treeBuilder;
    }


}