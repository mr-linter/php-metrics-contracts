<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Interface for collector registry.
 */
interface Registry
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
     * Get all collectors.
     *
     * @return iterable<Collector>
     */
    public function all(): iterable;
}
