<?php

namespace MrLinter\Contracts\Metrics;

class Metric
{
    public function __construct(
        public readonly string $category,
        public readonly string $title,
        public readonly string $value,
    ) {
    }
}
