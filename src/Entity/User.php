<?php

namespace App\Entity;

class User
{
    private static $userAllSkills = [
        'writeCode' => 'code writing',
        'testCode' => 'code testing',
        'commWithPM' => 'communication with manager',
        'draw' => 'drawing',
        'createTasks' => 'tasks creation',        
    ];

    public static $userSkills = [];

    function __construct ( string $userType )
    {
        self::$userSkills = self::$userAllSkills;

        switch ($userType) {
            case 'developer':
                unset(self::$userSkills['draw']);
                unset(self::$userSkills['createTasks']);
                break;
            case 'designer':
                unset(self::$userSkills['writeCode']);
                unset(self::$userSkills['testCode']);
                unset(self::$userSkills['createTasks']);
                break;
            case 'tester':
                unset(self::$userSkills['writeCode']);
                unset(self::$userSkills['draw']);
                break;
            case 'manager':
                unset(self::$userSkills['writeCode']);
                unset(self::$userSkills['testCode']);
                unset(self::$userSkills['commWithPM']);
                unset(self::$userSkills['draw']);
                break;
            default:
                unset(self::$userSkills);
        }
    }

    public function __get( $n )
    {
        return false;
    }
}

