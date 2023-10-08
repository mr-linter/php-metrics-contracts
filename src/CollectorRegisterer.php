<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Interface for collector register.
 */
interface CollectorRegisterer
{
    /**
     * Register collector.
     *
     * @throws RegisterException
     */
    public function register(Collector $collector): void;
}
