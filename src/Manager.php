<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Interface for metrics managers.
 */
interface Manager extends Registry
{
    /**
     * Read metrics.
     *
     * @return array<Metric>
     */
    public function read(): array;

    /**
     * Flush metrics to persistent storage.
     */
    public function flush(Storage $storage, Commit $commit): void;
}
