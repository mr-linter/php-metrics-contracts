<?php

namespace MrLinter\Contracts\Metrics;

class Commit
{
    /**
     * @param array<string, string> $labels
     */
    public function __construct(
        public readonly string $transactionId,
        public readonly array $labels = [],
    ) {
    }
}
