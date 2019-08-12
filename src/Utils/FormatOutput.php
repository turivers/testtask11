<?php

namespace App\Utils;
    
class FormatOutput
{
    public function addTireSpaceBefore( string $c ): string
    {
        return '- ' . $c;
    }

    public function boolToString( bool $c ): string
    {
        return $c ? 'true' : 'false';
    }
}
