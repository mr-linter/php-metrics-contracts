<?php

namespace MrLinter\Contracts\Metrics;

readonly class Metric
{
    public function __construct(
        public string $category,
        public string $name,
        public string $value,
    ) {
    }
}
