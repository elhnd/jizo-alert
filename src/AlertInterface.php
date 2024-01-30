<?php

namespace Sesame\Bundle\JizoAlert;

use Sesame\Bundle\JizoAlert\DTO\AlertDto;
use Sesame\Bundle\JizoAlert\Entity\Alert;

interface AlertInterface
{
    /**
    * @return Alert[].
    */
    public function getAllAlerts(): array;

    public function getAlert(AlertDto $alertDto);

}