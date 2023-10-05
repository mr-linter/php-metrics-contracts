<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Register collectors.
 */
interface Registerer
{
    /**
     * Register collector.
     *
     * @throws RegisterException
     */
    public function register(Collector $collector): void;
}
