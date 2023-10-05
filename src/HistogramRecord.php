<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Interface for histogram records.
 */
interface HistogramRecord
{
    /**
     * Get histogram key.
     *
     * @return non-empty-string
     */
    public function key(): string;

    /**
     * Get all measurements.
     *
     * @return array<float>
     */
    public function all(): array;

    /**
     * Get grouped measurements.
     *
     * @return array<numeric-string, int>
     */
    public function group(): array;
}
