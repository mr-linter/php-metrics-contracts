<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Interface for metrics collectors.
 *
 * @phpstan-type Labels = array<string, string>
 */
interface Collector
{
    /**
     * Increment metric.
     *
     * @param array<string, string> $labels
     *
     * @throws MetricsException
     */
    public function inc(string $key, float $value = 1, array $labels = []): void;

    /**
     * Observe metric.
     *
     * @param array<string, string> $labels
     *
     * @throws MetricsException
     */
    public function observe(string $key, float $value, array $labels = []): void;

    /**
     * Set metric value.
     *
     * @param array<string, string> $labels
     *
     * @throws MetricsException
     */
    public function measure(string $key, float $value, array $labels = []): void;
}
