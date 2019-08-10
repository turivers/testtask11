<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use App\Entity\User;
use App\Utils\FormatOutput;

class UserDeveloperCheckSkill extends Command
{
    protected function configure()
    {
        $this
            ->setName('can:developer')
            ->setDescription('developer check skill')
            ->addArgument('can', InputArgument::REQUIRED, 'What developer can do')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $userType = explode(':', $input->getArgument('command'));

        $user = new User($userType[1]);
        $fo = new FormatOutput;

        $can = $input->getArgument('can');
        $bo = array_key_exists($can, $user::$userSkills);
        
        $output->writeln($fo->boolToString($bo));
    }
}
