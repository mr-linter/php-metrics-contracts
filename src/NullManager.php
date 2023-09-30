<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Null object for Manager, Reader contracts
 */
final class NullManager implements Manager, Reader
{
    public function inc(string $key, float $value = 1, array $labels = []): void
    {
        // null
    }

    public function observe(string $key, float $value, array $labels = []): void
    {
        // null
    }

    public function measure(string $key, float $value, array $labels = []): void
    {
        // null
    }

    public function declare(array $subjects): void
    {
        // null
    }

    public function flush(string $transactionId, array $labels = []): void
    {
        // null
    }

    public function read(): array
    {
        return [];
    }
}
