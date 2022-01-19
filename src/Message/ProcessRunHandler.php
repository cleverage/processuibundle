<?php

namespace CleverAge\ProcessUiBundle\Message;

use CleverAge\ProcessBundle\Command\ExecuteProcessCommand;
use Exception;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class ProcessRunHandler implements MessageHandlerInterface
{
    public function __construct(private ExecuteProcessCommand $command)
    {
    }

    /**
     * @throws Exception
     */
    public function __invoke(ProcessRunMessage $processRunMessage): void
    {
        $this->command->run(
            new ArrayInput(
                [
                    'processCodes' => [$processRunMessage->getProcessCode()],
                ]
            ),
            new NullOutput()
        );
    }
}
