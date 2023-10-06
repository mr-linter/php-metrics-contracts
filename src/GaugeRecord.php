<?php

namespace MrLinter\Contracts\Metrics;

class GaugeRecord
{
    /**
     * @param array<string, string> $labels
     */
    public function __construct(
        public readonly float $value,
        public readonly array $labels,
    ) {
    }
}
