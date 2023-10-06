<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Interface for metrics managers.
 */
interface Manager
{
    /**
     * Flush metrics to persistent storage.
     *
     * @throws FlushException
     */
    public function flush(Storage $storage, Commit $commit): void;
}
