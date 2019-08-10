<?php

namespace App\Command;

use Symfony\Component\Console\Input\InputArgument;

class UserDesignerCheckSkill extends UserDeveloperCheckSkill
{
    protected function configure()
    {
        $this
            ->setName('can:designer')
            ->setDescription('designer check skill')
            ->addArgument('can', InputArgument::REQUIRED, 'What designer can do')
        ;
    }
}

