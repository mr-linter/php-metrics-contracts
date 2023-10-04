<?php

namespace MrLinter\Contracts\Metrics;

class HistogramDataPoint
{
    /**
     * @param non-empty-string $key
     * @param array<string, string> $labels
     * @param array<numeric-string, float> $bucketCounters
     */
    public function __construct(
        public readonly string $key,
        public readonly float $value,
        public readonly array $labels,
        public readonly array $bucketCounters,
    ) {
    }
}
