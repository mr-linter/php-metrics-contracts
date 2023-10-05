<?php

namespace MrLinter\Contracts\Metrics;

class GaugeRecord
{
    /**
     * @param non-empty-string $key
     * @param array<string, string> $labels
     */
    public function __construct(
        public readonly string $key,
        public readonly float $value,
        public readonly array $labels,
    ) {
    }
}
