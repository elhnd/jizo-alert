<?php

namespace Sesame\Bundle\JizoAlerts\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface 
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('sesame_jizo_alert');

        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('driver')
                    ->defaultValue('pdo_mysql')
                ->end()
                ->scalarNode('host')
                    ->defaultValue('localhost')
                ->end()
                ->scalarNode('port')
                    ->defaultValue('3306')
                ->end()
                ->scalarNode('user')
                    ->defaultValue('toto')
                ->end()
                ->scalarNode('password')
                    ->defaultValue('toto')
                ->end()
                ->scalarNode('db_name')
                    ->defaultValue('SesameIdsAlertDb')
                ->end()
                ->scalarNode('charset')
                    ->defaultValue('utf8mb4')
                ->end()
                ->scalarNode('is_dev_mode')
                    ->defaultValue(true)
                ->end()
            ->end();
        return $treeBuilder;
    }
}