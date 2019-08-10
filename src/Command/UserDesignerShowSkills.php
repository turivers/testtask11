<?php

namespace App\Command;

class UserDesignerShowSkills extends UserDeveloperShowSkills
{
    protected function configure()
    {
        $this
            ->setName('user:designer')
            ->setDescription('show designer skills')
        ;
    }
}

