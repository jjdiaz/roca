<?php
/**
 * Created by ASM Web Services.
 * @date:   23/11/2018 13:07
 * @author:     Joaquín Jiménez <jjimenez@asmws.com>
 * @copyright   2018 ASM Web Services (http://asmws.com)
 *
 */

namespace Asm\Bundle\CloudinaryBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\VarDumper\VarDumper;

/**
 * Inject the extension settings in the configuration controller.
 * TODO: should be reworked in the PIM core project
 *
 * @author    Jean-Marie Leroux <jean-marie.leroux@akeneo.com>
 * @copyright 2016 TextMaster.com (https://textmaster.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class OroConfigCompilerPass implements CompilerPassInterface
{
    /**
     * {@inheritDoc}
     */
    public function process(ContainerBuilder $container)
    {
        $configManagerDefinition = $container->findDefinition('oro_config.global');
        $settings = $configManagerDefinition->getArguments()[1];

        $diExtensionName = 'asm_cloudinary';
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