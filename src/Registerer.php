<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Register collectors.
 */
interface Registerer
{
    /**
     * Register collector.
     */
    public function register(Collector $collector): void;
}
