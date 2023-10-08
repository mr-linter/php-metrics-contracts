<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Interface for collector manager.
 */
interface CollectorManager extends CollectorRegisterer
{
    /**
     * Get collector by key.
     *
     * @param non-empty-string $key
     *
     * @throws CollectorNotFoundException
     */
    public function get(string $key): Collector;

    /**
     * Flush metrics to persistent storage.
     *
     * @throws FlushException
     */
    public function flush(Storage $storage, Commit $commit): void;
}
