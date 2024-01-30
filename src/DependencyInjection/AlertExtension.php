<?php

namespace Sesame\Bundle\JizoAlert\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class AlertExtension extends Extension
{
    function load(array $configs, ContainerBuilder $container)
    {
        // Load the bundle's service declarations 
        // $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../../config'));
        // $loader->load('services.yaml');

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../../config'));
        $loader->load('service.xml');

        $option = $this->processConfiguration(new Configuration(), $configs);

        $container->setParameter('sesame_jizo_alert.db.driver', $option['driver']);
        $container->setParameter('sesame_jizo_alert.db.host',   $option['host']);
        $container->setParameter('sesame_jizo_alert.db.port',   $option['port']);
        $container->setParameter('sesame_jizo_alert.db.user',   $option['user']);
        $container->setParameter('sesame_jizo_alert.db.password', $option['password']);
        $container->setParameter('sesame_jizo_alert.db.name',   $option['db_name']);
        $container->setParameter('sesame_jizo_alert.db.charset',$option['charset']);
        $container->setParameter('sesame_jizo_alert.db.is_dev_mode', $option['is_dev_mode']);
        //$alertDefinition = $container->getDefinition('sesame.jizo.alert.db_conf');
        //$alertDefinition->replaceArgument(0, $option['api_key']);
    }
}