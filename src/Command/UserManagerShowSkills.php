<?php

namespace App\Command;

class UserManagerShowSkills extends UserDeveloperShowSkills
{
    protected function configure()
    {
        $this
            ->setName('user:manager')
            ->setDescription('show manager skills')
        ;
    }
}

