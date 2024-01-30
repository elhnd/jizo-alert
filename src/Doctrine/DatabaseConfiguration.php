<?php

namespace Sesame\Bundle\JizoAlerts\Doctrine;

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class DatabaseConfiguration
{
    private $entityManager;

    public function __construct(
        private string $driver,
        private string $host,
        private string $port,
        private string $user,
        private string $password,
        private string $dbname,
        private string $charset,
        private bool   $isDevMode
    )
    {
        $config = ORMSetup::createAttributeMetadataConfiguration([__DIR__.'/src/Entity'], $isDevMode);

        $connection = DriverManager::getConnection([
            'driver'    => $driver,
            'host'      => $host,
            'port'      => $port,
            'user'      => $user,
            'password'  => $password,
            'dbname'    => $dbname,
            'charset'   => $charset
        ], $config);

        $this->entityManager = new EntityManager($connection, $config);
    }

    public function getEntityManager()
    {
        return $this->entityManager;
    }
}