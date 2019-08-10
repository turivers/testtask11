<?php

namespace App\Command;

use Symfony\Component\Console\Input\InputArgument;

class UserTesterCheckSkill extends UserDeveloperCheckSkill
{
    protected function configure()
    {
        $this
            ->setName('can:tester')
            ->setDescription('tester check skill')
            ->addArgument('can', InputArgument::REQUIRED, 'What tester can do')
        ;
    }
}

