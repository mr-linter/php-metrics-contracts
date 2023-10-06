<?php

namespace MrLinter\Contracts\Metrics;

readonly class Snapshot
{
    /**
     * @param array<CounterRecord> $counters
     * @param array<GaugeRecord> $gauges
     * @param array<HistogramRecord> $histograms
     */
    public function __construct(
        public Subject $subject,
        public array $counters,
        public array $gauges,
        public array $histograms,
    ) {
    }
}
