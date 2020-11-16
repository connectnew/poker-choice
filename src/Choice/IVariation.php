<?php

namespace App\Choice;

interface IVariation
{
    public function check(array $dice): bool;

    public function getName(): string;
}
