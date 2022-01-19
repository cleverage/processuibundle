<?php

namespace CleverAge\ProcessUiBundle\Event;

class IncrementReportInfoEvent
{
    public const NAME = 'cleverage_process_ui.increment_report_info';

    public function __construct(private string $processCode, private string $key)
    {
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getProcessCode(): string
    {
        return $this->processCode;
    }
}
