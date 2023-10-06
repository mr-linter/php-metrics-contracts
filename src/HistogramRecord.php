<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Interface for histogram records.
 */
interface HistogramRecord
{
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

    /**
     * Get metric labels.
     *
     * @return array<string, string>
     */
    public function labels(): array;
}
