<?php

namespace App\Choice\Variation;

use App\Choice\IVariation;

class BigStraight extends BaseVariation implements IVariation
{
    public function check(array $dice): bool
    {
        $byKeys = $this->convertDiceByKeys($dice);
        $sortDice = $this->sortDiceByAsc($dice);

        if (count($byKeys) === 5) {
            if (($sortDice[0] === 1 && $sortDice[4] === 5) ||
                ($sortDice[0] === 2 && $sortDice[4] === 6)) {
                return true;
            }
        }

        return false;
    }

    public function getName(): string
    {
        return "большой стрит";
    }
}
