<?php

namespace Sesame\Bundle\JizoAlerts;

use Sesame\Bundle\JizoAlerts\Entity\Alert;

interface AlertsInterface
{
    /**
    * @return Alert[].
    */
    public function getAllAlerts(): array;

}