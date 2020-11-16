<?php

namespace App\Choice;

class Croupier
{
    public function getDice(): array
    {
        $result = [];

        for ($i = 1; $i <= 5; $i ++) {
            $result[] = rand(1, 6);
        }

        return $result;
    }

}
