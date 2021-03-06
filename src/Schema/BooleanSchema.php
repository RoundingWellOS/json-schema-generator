<?php
declare(strict_types=1);

namespace RoundingWell\Schematic\Schema;

use RoundingWell\Schematic\Schema;

class BooleanSchema extends Schema
{
    public function phpType(): string
    {
        return 'bool';
    }
}
