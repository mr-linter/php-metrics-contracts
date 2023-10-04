<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Interface for metrics collectors.
 */
interface Collector
{
    /**
     * Get metric subject.
     */
    public function subject(): Subject;

    /**
     * Collect metrics snapshot.
     */
    public function collect(): Snapshot;
}
