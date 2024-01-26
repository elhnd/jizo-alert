
<?php

use Sesame\Bundle\JizoAlerts\DependencyInjection\AlertExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
require_once __DIR__ . '/../vendor/autoload.php';

$configs = [];

$container = new ContainerBuilder();
$extension = new AlertExtension();
$extension->load($configs, $container);
$container->compile();

$alertService = $container->get('sesame.jizo.alerts');
$alerts = $alertService->alerts();
var_dump($alerts);