<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Interface
 */
interface Manager extends Collector
{
    /**
     * Declare metric.
     *
     * @param array<Subject> $subjects
     */
    public function declare(array $subjects): void;

    /**
     * Flush metrics to persistent storage.
     *
     * @param array<string, string> $labels - additional labels for each metrics.
     */
    public function flush(string $transactionId, array $labels = []): void;
}
