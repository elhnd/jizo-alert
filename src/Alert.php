<?php

namespace Sesame\Bundle\JizoAlert;

use Doctrine\ORM\EntityManager;
use Sesame\Bundle\JizoAlert\Doctrine\DatabaseConfiguration;
use Sesame\Bundle\JizoAlert\DTO\AlertDto;
use Sesame\Bundle\JizoAlert\Entity\Alert as AlertEntity;
use Sesame\Bundle\JizoAlert\Repository\AlertRepository;

class Alert implements AlertInterface
{
    private AlertRepository $alertRepository;
    private EntityManager   $em;

    public function __construct(private DatabaseConfiguration $dbConfig)
    {
        $this->em = $dbConfig->getEntityManager();
        $this->alertRepository = $this->em->getRepository(AlertEntity::class);
    }

    public function getAllAlerts(): array
    {
        return $this->alertRepository->findAll();
    }

    public function getAlerts(AlertDto $alertDto): array
    {
        return $this->alertRepository->getAlerts($alertDto);
    }

}