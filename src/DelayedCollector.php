<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Interface for delayed collectors.
 *
 * @phpstan-import-type Labels from Collector
 */
interface DelayedCollector extends Collector
{
    /**
     * Observe with callback.
     *
     * @param \Closure(): float $value
     * @param Labels $labels
     */
    public function observeFn(string $key, \Closure $value, array $labels): void;
}
