<?php
/**
 * Created by ASM Web Services.
 * @date:   23/11/2018 13:07
 * @author:     Joaquín Jiménez <jjimenez@asmws.com>
 * @copyright   2018 ASM Web Services (http://asmws.com)
 *
 */

namespace Roca\Bundle\CloudinaryConnectorBundle\DependencyInjection\Compiler;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class OroConfigCompilerPass implements CompilerPassInterface
{
    /**
     * {@inheritDoc}
     */
    public function process(ContainerBuilder $container)
    {
        $configManagerDefinition = $container->findDefinition('oro_config.global');
        $settings = $configManagerDefinition->getArguments()[1];

        $diExtensionName = 'cloudinary_connector';
        $bundleSettings = $settings[$diExtensionName];

        $configControllerDefinition = $container->findDefinition('oro_config.controller.configuration');
        $arguments = $configControllerDefinition->getArguments();
        $options = $arguments[3];
        foreach ($bundleSettings as $name => $value) {
            $options[] = [
                'section' => $diExtensionName,
                'name'    => $name,
            ];
        }
        $arguments[3] = $options;
        $configControllerDefinition->setArguments($arguments);
    }
}