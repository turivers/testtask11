<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use App\Entity\User;
use App\Utils\FormatOutputForCheckSkill;

class UserDesignerCheckSkill extends Command
{
    protected function configure()
    {
        $this
            ->setName('can:designer')
            ->setDescription('designer check skill')
            ->addArgument('can', InputArgument::REQUIRED, 'What user can do')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $userType = explode(':', $input->getArgument('command'));

        $user = new User($userType[1]);

        $can = $input->getArgument('can');
        $userSkillStatus = $user->$can;

        $formatOutput = new FormatOutputForCheckSkill($userSkillStatus);

        $output->writeln($formatOutput->userCheckSkill);
    }
}

