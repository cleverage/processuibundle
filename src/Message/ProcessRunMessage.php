<?php

namespace CleverAge\ProcessUiBundle\Message;

class ProcessRunMessage
{
    /**
     * @param array <string, string> $processInput
     */
    public function __construct(private string $processCode, private array $processInput = [])
    {
    }

    public function getProcessCode(): string
    {
        return $this->processCode;
    }

    /**
     * @return array <string, string>
     */
    public function getProcessInput(): array
    {
        return $this->processInput;
    }
}
