<?php

namespace MrLinter\Contracts\Metrics;

/**
 * Interface for number list.
 */
interface NumberList extends \Countable, \IteratorAggregate
{
    /**
     * Get numbers sum.
     */
    public function sum(): float;

    /**
     * Get last number.
     */
    public function last(): ?float;
}
