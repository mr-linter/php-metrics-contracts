<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Interface for metrics managers.
 *
 * @phpstan-import-type Labels from Collector
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

    /**
     * Read metrics.
     *
     * @return array<Metric>
     */
    public function read(): array;
}
