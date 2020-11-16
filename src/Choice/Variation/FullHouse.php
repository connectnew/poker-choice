<?php

namespace App\Choice\Variation;

use App\Choice\IVariation;

class FullHouse extends BaseVariation implements IVariation
{
    public function check(array $dice): bool
    {
        $byKeys = $this->convertDiceByKeys($dice);
        $byValues = $this->convertKeysByValueAndSortByAsc($byKeys);

        if (count($byKeys) === 2 && $byValues[0] === 2 && $byValues[1] === 3) {

            return true;
        }

        return false;
    }

    public function getName(): string
    {
        return "фул хаус";
    }
}