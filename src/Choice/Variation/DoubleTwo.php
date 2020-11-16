<?php

namespace App\Choice\Variation;

use App\Choice\IVariation;

class DoubleTwo extends BaseVariation implements IVariation
{
    public function check(array $dice): bool
    {
        $byKeys = $this->convertDiceByKeys($dice);
        $byValues = $this->convertKeysByValueAndSortByDesc($byKeys);

        if (count($byValues) === 3 && $byValues[0] === 2 && $byValues[1] === 2) {

            return true;
        }

        return false;
    }

    public function getName(): string
    {
        return "две пары";
    }
}