<?php

namespace MrLinter\Contracts\Metrics;

final class NullStorage implements Storage
{
    public function flush(Commit $commit, iterable $snapshots): void
    {
        // null
    }
}
