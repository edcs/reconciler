<?php

namespace Edcs\Reconciler\Commands;

use duncan3dc\Laravel\Dusk;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Reconcile extends Command
{
    protected function configure()
    {
        $this->setName('reconcile')
            ->setDescription('Reconciles all bank accounts in configuration')
            ->setHelp('This command logs into your online banking and downloads your statements');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $dusk = new Dusk();

        $dusk->visit('https://www.google.co.uk');
    }
}
