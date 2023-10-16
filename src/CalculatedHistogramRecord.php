<?php

namespace MrLinter\Contracts\Metrics;

class CalculatedHistogramRecord implements HistogramRecord
{
    /**
     * @param non-empty-string $key
     * @param array<float> $all
     * @param array<numeric-string, int> $frequencies
     * @param array<string, string> $labels
     */
    public function __construct(
        private readonly string $key,
        private readonly NumberList $all,
        private readonly array      $frequencies,
        private readonly array      $labels,
    ) {
    }
    public function key(): string
    {
        return $this->key;
    }

    public function all(): NumberList
    {
        return $this->all;
    }

    public function frequencies(): array
    {
        return $this->frequencies;
    }

    public function labels(): array
    {
        return $this->labels;
    }
}
