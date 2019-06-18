<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use App\Entity\User;
use App\Utils\FormatOutputForSkillList;

class UserDeveloperShowSkills extends Command
{
    protected function configure()
    {
        $this
            ->setName('user:developer')
            ->setDescription('show developer skills')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $userType = explode(':', $input->getArgument('command'));

        $user = new User($userType[1]);

        $formatOutput = new FormatOutputForSkillList($user);

        foreach ($formatOutput->userSkillList as $v) {
            $output->writeln($v);
        }
    }
}

