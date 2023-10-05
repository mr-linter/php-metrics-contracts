<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Storage for metrics.
 */
interface Storage
{
    /**
     * Flush metrics.
     *
     * @param iterable<Snapshot> $snapshots
     *
     * @throws FlushException
     */
    public function flush(Commit $commit, iterable $snapshots): void;
}
