<?php

namespace MrLinter\Contracts\Metrics;

class CounterRecord
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
