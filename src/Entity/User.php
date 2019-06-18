<?php

namespace App\Entity;

class User
{
    public $writeCode = 'code writing';
    public $testCode = 'code testing';
    public $commWithPM = 'communication with manager';
    public $draw = 'drawing';
    public $createTasks = 'tasks creation';

    function __construct( $userType )
    {
        switch ($userType) {
            case 'developer':
                $this->draw = false;
                $this->createTasks = false;
                break;
            case 'designer':
                $this->writeCode = false;
                $this->testCode = false;
                $this->createTasks = false;
                break;
            case 'tester':
                $this->writeCode = false;
                $this->draw = false;
                break;
            case 'manager':
                $this->writeCode = false;
                $this->testCode = false;
                $this->commWithPM = false;
                $this->draw = false;
                break;
        }
    }

    public function getUserSkillsListTrue( $userSkillsList )
    {
        foreach ($userSkillsList as $k => $v) {
            if ($v) {
                $userSkillsListTrue[$k]= $v;
            }
        }
        return $userSkillsListTrue;
    }

    public function userCheckSkill( $userSkillsList, $checkSkill )
    {
        return array_key_exists($checkSkill, $userSkillsList) ? 'true' : 'false';
    }
}

