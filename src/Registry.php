<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Interface for collector registry.
 */
interface Registry extends Registerer
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
     * Get all collectors.
     *
     * @return iterable<Collector>
     */
    public function all(): iterable;
}
