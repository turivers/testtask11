<?php

namespace App\Command;

use Symfony\Component\Console\Input\InputArgument;

class UserManagerCheckSkill extends UserDeveloperCheckSkill
{
    protected function configure()
    {
        $this
            ->setName('can:manager')
            ->setDescription('manager check skill')
            ->addArgument('can', InputArgument::REQUIRED, 'What manager can do')
        ;
    }
}

