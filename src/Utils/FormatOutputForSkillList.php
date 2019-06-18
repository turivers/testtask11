<?php

namespace App\Utils;
    
class FormatOutputForSkillList
{
    public $userSkillList;

    function __construct( $c )
    {
        foreach ($c as $k => $v) {
            if ($v) {
                $this->userSkillList[] = '- ' . $v;
            }
        }
    }
}
