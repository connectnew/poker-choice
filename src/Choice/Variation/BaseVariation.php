<?php

namespace App\Choice\Variation;

class BaseVariation
{
    protected function convertDiceByKeys(array $dice): array
    {
        $keys = [];

        foreach ($dice as $item) {
            if (isset($keys[$item])) {
                $keys[$item] ++;
            } else {
                $keys[$item] = 1;
            }
        }

        return $keys;
    }

    protected function convertKeysByValueAndSortByAsc(array $byKeys): array
    {
        $values = array_values($byKeys);

        sort($values, SORT_NUMERIC);

        return $values;
    }

    protected function convertKeysByValueAndSortByDesc(array $byKeys): array
    {
        $values = array_values($byKeys);

        rsort($values, SORT_NUMERIC);

        return $values;
    }

    protected function sortDiceByAsc(array $dice): array
    {
        sort($dice, SORT_NUMERIC);

        return $dice;
    }
}
