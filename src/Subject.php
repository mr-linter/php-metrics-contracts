<?php

namespace MrLinter\Contracts\Metrics;

class Subject
{
    /**
     * @param non-empty-string $key
     */
    public function __construct(
        public readonly string $category,
        public readonly string $key,
        public readonly string $title,
    ) {
    }
}
