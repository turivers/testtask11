<?php

namespace App\Command;

class UserTesterShowSkills extends UserDeveloperShowSkills
{
    protected function configure()
    {
        $this
            ->setName('user:tester')
            ->setDescription('show tester skills')
        ;
    }
}

