<?php

namespace Test\ICanBoogie\Binding\Prototype\Console;

use ICanBoogie\Binding\Prototype\Console\ListPrototypesCommand;
use ICanBoogie\Console\Test\CommandTestCase;

final class ListPrototypesCommandTest extends CommandTestCase
{
    public static function provideExecute(): array
    {
        return [

            [
                'prototypes',
                ListPrototypesCommand::class,
                [],
                [
                    'Test\ICanBoogie\Binding\Prototype\Article',
                    'get_url',
                    'Test\ICanBoogie\Binding\Prototype\Hooks::get_url',
                ]
            ],

        ];
    }

    public function testAlias(): void
    {
        $loader = $this->getCommandLoader();
        $command1 = $loader->get('prototypes');
        $command2 = $loader->get('prototypes:list');

        $this->assertSame($command1, $command2);
    }
}
