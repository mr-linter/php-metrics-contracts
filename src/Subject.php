<?php

namespace MrLinter\Contracts\Metrics;

readonly class Subject
{
    /**
     * @param list<float> $buckets
     */
    public function __construct(
        public string $type,
        public string $category,
        public string $key,
        public string $name,
        public array  $buckets = [],
    ) {
    }
}
