<?php

namespace MrLinter\Contracts\Metrics;

readonly class Snapshot
{
    /**
     * @param array<CounterDataPoint> $counters
     * @param array<GaugeDataPoint> $gauges
     * @param array<HistogramDataPoint> $histograms
     */
    public function __construct(
        public array $counters,
        public array $gauges,
        public array $histograms,
    ) {
    }
}
