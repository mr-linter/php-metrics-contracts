<?php

namespace MrLinter\Contracts\Metrics;

final class CalculatedNumberList implements NumberList
{
    /**
     * @param array<float> $items
     */
    public function __construct(
        private readonly array $items,
        private readonly float $sum,
        private readonly int $count,
    ) {
    }

    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->items);
    }

    public function count(): int
    {
        return $this->count;
    }

    public function sum(): float
    {
        return $this->sum;
    }

    public function last(): ?float
    {
        $items = $this->items;

        return end($items);
    }
}
