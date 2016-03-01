<?php

namespace Grossum\FaqBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode    = $treeBuilder->root('grossum_faq');

        $rootNode
            ->children()
                ->arrayNode('class')
                    ->addDefaultsIfNotSet()
                        ->children()
                            ->scalarNode('faq')
                                ->defaultValue('Application\\Grossum\\FaqBundle\\Entity\\Faq')
                        ->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
