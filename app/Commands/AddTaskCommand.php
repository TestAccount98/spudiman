<?php

namespace App\Commands;

use App\TaskMaster;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class AddTaskCommand extends Command
{
    public function configure()
    {
        $this->setName('task:add')
                ->setAliases(['t:a'])
                ->addArgument('dir', InputArgument::REQUIRED)
                ->addArgument('regexp', InputArgument::REQUIRED);
    }
    
    public function execute(InputInterface $input, OutputInterface $output)
    {
        TaskMaster::addTask($input->getArgument('dir'), $input->getArgument('regexp'));
    }
}
