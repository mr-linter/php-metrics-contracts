<?php

namespace MrLinter\Contracts\Metrics;

class CalculatedHistogramRecord implements HistogramRecord
{
    /**
     * @param non-empty-string $key
     * @param array<float> $all
     * @param array<numeric-string, int> $grouped
     */
    public function __construct(
        private readonly string $key,
        private readonly array $all,
        private readonly array $grouped,
    ) {
    }

    public function key(): string
    {
        return $this->key;
    }

    public function all(): array
    {
        return $this->all;
    }

    public function group(): array
    {
        return $this->grouped;
    }
}
