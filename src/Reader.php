<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Interface for metrics readers.
 */
interface Reader
{
    /**
     * Read metrics.
     *
     * @return array<Metric>
     */
    public function read(): array;
}
