<?php

namespace CleverAge\ProcessUiBundle\Event;

class SetReportInfoEvent
{
    public const NAME = 'cleverage_process_ui.set_report_info';

    public function __construct(private string $processCode, private string $key, private mixed $value)
    {
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getValue(): mixed
    {
        return $this->value;
    }

    public function getProcessCode(): string
    {
        return $this->processCode;
    }
}
