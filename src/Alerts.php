<?php

namespace Sesame\Bundle\JizoAlerts;

use Doctrine\ORM\EntityManager;
use Sesame\Bundle\JizoAlerts\Doctrine\DatabaseConfiguration;
use Sesame\Bundle\JizoAlerts\Entity\Alert;
use Sesame\Bundle\JizoAlerts\Repository\AlertRepository;

class Alerts implements AlertsInterface
{
    private AlertRepository $alertRepository;
    private EntityManager   $em;

    public function __construct(private DatabaseConfiguration $dbConfig)
    {
        $this->em = $dbConfig->getEntityManager();
        $this->alertRepository = $this->em->getRepository(Alert::class);
    }

    /**
    * @return Alert[].
    */
    public function getAllAlerts(): array
    {
        return $this->alertRepository->findAll();
    }

}