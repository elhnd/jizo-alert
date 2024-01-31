
<?php

use Sesame\Bundle\JizoAlert\DependencyInjection\AlertExtension;
use Sesame\Bundle\JizoAlert\Dto\AlertDto;
use Symfony\Component\DependencyInjection\ContainerBuilder;
require_once __DIR__ . '/../vendor/autoload.php';

$configs = [];

$container = new ContainerBuilder();
$extension = new AlertExtension();
$extension->load($configs, $container);
$container->compile();

// DateTime::createFromFormat('Y-m-d-H-i-s', '2000-01-22 12-06');
$alertDto = new AlertDto(dateTimeFrom:'2000-01-22-12-06-21', dateTimeTo:'2024-01-29-12-06-21', limit: 1);
$alertService = $container->get('sesame.jizo.alert');
$alerts = $alertService->getAlerts($alertDto);
var_dump(json_encode($alerts));