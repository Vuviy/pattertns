<?php

namespace App\Command;

class RemoteControl
{
    private array $commands = [];

    public function setCommand(Command $command): void
    {
        $this->commands[] = $command;
    }

    public function pressButton(): void
    {
        $command = array_shift($this->commands);
        if ($command) {
            $command->execute();
        }
    }
}