<?php

namespace Sesame\Bundle\JizoAlert;

use Sesame\Bundle\JizoAlert\DTO\AlertDto;
use Sesame\Bundle\JizoAlert\Entity\Alert;

interface AlertInterface
{
    public function getAllAlerts(): array;

    public function getAlerts(AlertDto $alertDto): array;

}