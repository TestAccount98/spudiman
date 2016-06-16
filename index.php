<?php

define('__CONFIG__', __DIR__ . '/config');

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/app/QueryBuilder.php';

use App\Commands\AddTaskCommand;
use App\Commands\RunTaskCommand;
use Symfony\Component\Console\Application;

$commands = [
    new AddTaskCommand(),
    new RunTaskCommand()
];

$app = new Application('Spudiman', '1.0.1');
$app->addCommands($commands);

$app->run();