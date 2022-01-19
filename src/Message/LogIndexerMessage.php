<?php

namespace CleverAge\ProcessUiBundle\Message;

class LogIndexerMessage
{
    public const DEFAULT_OFFSET = 2500;

    public function __construct(private int $processExecutionId, private string $logPath, private int $start, private int $offset = self::DEFAULT_OFFSET)
    {
    }

    public function getProcessExecutionId(): int
    {
        return $this->processExecutionId;
    }

    public function getLogPath(): string
    {
        return $this->logPath;
    }

    public function getStart(): int
    {
        return $this->start;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }
}
