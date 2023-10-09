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
     * @return NumberList
     */
    public function all(): NumberList;

    /**
     * Get grouped measurements.
     *
     * @return array<numeric-string, int>
     */
    public function frequencies(): array;

    /**
     * Get metric labels.
     *
     * @return array<string, string>
     */
    public function labels(): array;
}
