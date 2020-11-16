<?php

namespace App\Choice\Variation;

use App\Choice\IVariation;

class Pocker extends BaseVariation implements IVariation
{
    public function check(array $dice): bool
    {
        $byKeys = $this->convertDiceByKeys($dice);

        if (count($byKeys) === 1) {

            return true;
        }

        return false;
    }

    public function getName(): string
    {
        return "покер";
    }
}