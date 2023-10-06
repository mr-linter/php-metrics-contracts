<?php

namespace MrLinter\Contracts\Metrics;

class CalculatedHistogramRecord implements HistogramRecord
{
    /**
     * @param non-empty-string $key
     * @param array<float> $all
     * @param array<numeric-string, int> $grouped
     * @param array<string, string> $labels
     */
    public function __construct(
        private readonly array $all,
        private readonly array $grouped,
        private readonly array $labels,
    ) {
    }

    public function all(): array
    {
        return $this->all;
    }

    public function group(): array
    {
        return $this->grouped;
    }

    public function labels(): array
    {
        return $this->labels;
    }
}
