<?php

namespace Sesame\Bundle\JizoAlerts;

use Sesame\Bundle\JizoAlerts\DTO\AlertDto;
use Sesame\Bundle\JizoAlerts\Entity\Alert;

interface AlertsInterface
{
    /**
    * @return Alert[].
    */
    public function getAllAlerts(): array;

    public function getAlert(AlertDto $alertDto);

}