<?php

namespace Sesame\Bundle\JizoAlert\DependencyInjection;

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
                    ->info('Database driver')
                ->end()
                ->scalarNode('host')
                    ->defaultValue('localhost')
                    ->info('Database host')
                ->end()
                ->scalarNode('port')
                    ->defaultValue('3306')
                    ->info('Database port')
                ->end()
                ->scalarNode('user')
                    ->defaultValue('toto')
                    ->info('Database user')
                ->end()
                ->scalarNode('password')
                    ->defaultValue('toto')
                    ->info('Database password')
                ->end()
                ->scalarNode('db_name')
                    ->defaultValue('SesameIdsAlertDb')
                    ->info('Database name')
                ->end()
                ->scalarNode('charset')
                    ->defaultValue('utf8mb4')
                    ->info('Database charset')
                ->end()
                ->scalarNode('is_dev_mode')
                    ->defaultValue(true)
                ->end()
            ->end();
        return $treeBuilder;
    }
}