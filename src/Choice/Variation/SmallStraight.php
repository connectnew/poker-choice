<?php

namespace App\Choice\Variation;

use App\Choice\IVariation;

class SmallStraight extends BaseVariation implements IVariation
{
    public function check(array $dice): bool
    {
        $byKeys = $this->convertDiceByKeys($dice);

        if (count($byKeys) >= 4) {
            if((isset($byKeys[1]) && isset($byKeys[2]) && isset($byKeys[3]) && isset($byKeys[4])) ||
               (isset($byKeys[2]) && isset($byKeys[3]) && isset($byKeys[4]) && isset($byKeys[5])) ||
               (isset($byKeys[3]) && isset($byKeys[4]) && isset($byKeys[5]) && isset($byKeys[6]))) {

                return true;
            }
        }

        return false;
    }

    public function getName(): string
    {
        return "малый стрит";
    }
}