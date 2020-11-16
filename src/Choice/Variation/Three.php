<?php

namespace App\Choice\Variation;

use App\Choice\IVariation;

class Three extends BaseVariation implements IVariation
{
    public function check(array $dice): bool
    {
        $byKeys = $this->convertDiceByKeys($dice);
        $byValues = $this->convertKeysByValueAndSortByDesc($byKeys);

        if ($byValues[0] === 3) {
            return true;
        }

        return false;
    }

    public function getName(): string
    {
        return "сэт";
    }
}