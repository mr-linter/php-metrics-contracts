<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Interface for metrics managers.
 *
 * @phpstan-type Labels = array<string, string>
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
     * @param Labels $labels - additional labels for each metrics.
     */
    public function flush(string $transactionId, array $labels = []): void;
}
