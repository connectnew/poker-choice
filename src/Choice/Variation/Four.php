<?php

namespace App\Choice\Variation;

use App\Choice\IVariation;

class Four extends BaseVariation implements IVariation
{
    public function check(array $dice): bool
    {
        $byKeys = $this->convertDiceByKeys($dice);
        $byValues = $this->convertKeysByValueAndSortByAsc($byKeys);

        if (count($byKeys) === 2 && $byValues[0] === 1 && $byValues[1] === 4) {

            return true;
        }

        return false;
    }

    public function getName(): string
    {
        return "каре";
    }
}