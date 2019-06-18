<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use App\Entity\User;

class UserTesterCheckSkill extends Command
{
    protected function configure()
    {
        $this
            ->setName('can:tester')
            ->setDescription('tester check skill')
            ->addArgument('can', InputArgument::REQUIRED, 'What user can do')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $userType = explode(':', $input->getArgument('command'));

        $user = new User($userType[1]);
        $skillsList = $user->getUserSkillsListTrue($user);
        
        $getResultCheckSkill = $user->userCheckSkill($skillsList, $input->getArgument('can'));

        $output->writeln($getResultCheckSkill);
    }
}

