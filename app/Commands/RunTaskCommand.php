<?php

namespace App\Commands;

use App\TaskMaster;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RunTaskCommand extends Command
{
    public function configure()
    {
        $this->setName('task:run')
                ->setAliases(['t:r']);
    }
    
    public function execute(InputInterface $input, OutputInterface $output)
    {
        TaskMaster::runTasks();
    }
}