<?php

namespace App\Utils;
    
class FormatOutput
{
    public function addTireSpaceBefore( string $c )
    {
        return '- ' . $c;
    }

    public function boolToString( bool $c )
    {
        return $c ? 'true' : 'false';
    }
}
