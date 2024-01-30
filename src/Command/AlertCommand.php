<?php

namespace Sesame\Bundle\JizoAlert\Command;

use Symfony\Bundle\FrameworkBundle\Command\AbstractConfigCommand;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'jizo:alert-controller',
    description: 'Create an alert API controller'
)]
class AlertCommand extends AbstractConfigCommand 
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        return self::SUCCESS;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure(): void
    {
        $this->
            setName('jizo:alert-controller')
            ->setDescription('Create an alert API controller');
    }
}