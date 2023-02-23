<?php

namespace ICanBoogie\Binding\Prototype\Console;

use ICanBoogie\Console\CallableDisplayName;
use ICanBoogie\Prototype\Config;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class ListPrototypesCommand extends Command
{
    protected static $defaultDescription = "List prototype callbacks";

    public function __construct(
        private readonly Config $config,
        private readonly string $style,
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $rows = [];

        foreach ($this->config->bindings as $target => $methods) {
            foreach ($methods as $method => $callback) {
                $rows[] = [
                    $target,
                    $method,
                    CallableDisplayName::from($callback)
                ];
            }
        }

        $table = new Table($output);
        $table->setHeaders([ 'Target', 'Method', 'Callback' ]);
        $table->setRows($rows);
        $table->setStyle($this->style);
        $table->render();

        return Command::SUCCESS;
    }
}
