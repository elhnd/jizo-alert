<?php

namespace Sesame\Bundle\JizoAlert\Dto;

readonly class AlertDto
{
    public function __construct(
        public ?string $ruleSidRev = null,
        public ?string $protocol = null,
        public ?string $content = null,
        public ?string $dateTimeFrom = null,
        public ?string $dateTimeTo = null,
        public ?string $srcIp = null,
        public ?string $flowId = null,
        public ?string $destIp = null,
        public ?string $destPort = null,
        public ?string $srcPort = null,
        public ?string $signature = null,
        public ?string $appProto = null,
        public ?string $severity = null,
        public ?string $state = null,
        public ?string $alertCategory = null,
        public ?string $investigationConclusion = null,
        public ?string $flag = null,
        public ?string $sidExcluded = null,
        public ?string $vlanId = null,
        public ?int    $offset = null,
        public ?int    $limit = 50
    ){}
}