<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Interface for collector manager.
 */
interface CollectorManager
{
    /**
     * Register collector.
     *
     * @throws RegisterException
     */
    public function register(Collector $collector): void;

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
