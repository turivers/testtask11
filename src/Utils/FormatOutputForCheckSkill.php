<?php

namespace App\Utils;
    
class FormatOutputForCheckSkill
{
    public $userCheckSkill;

    function __construct( $b )
    {
        $this->userCheckSkill = $b ? 'true' : 'false';
    }
}
