<?php

namespace Grossum\FaqBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class GrossumFaqExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config        = $this->processConfiguration($configuration, $configs);

        $registeredBundles = $container->getParameter('kernel.bundles');

        if (!isset($registeredBundles['GrossumCoreBundle'])) {
            throw new LogicException('GrossumFaqBundle required GrossumCoreBundle');
        }

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('admin.yml');
        $loader->load('classes.yml');
        $loader->load('services.yml');
    }
}
