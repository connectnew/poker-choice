<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Choice\Croupier;
use App\Choice\Variation\Pocker;
use App\Choice\Variation\Four;
use App\Choice\Variation\FullHouse;
use App\Choice\Variation\BigStraight;
use App\Choice\Variation\SmallStraight;
use App\Choice\Variation\Three;
use App\Choice\Variation\DoubleTwo;
use App\Choice\Variation\Two;
use App\Choice\Variation\Chance;

$croupier = new Croupier();
$dice = $croupier->getDice();

showName($dice);

/*************************************/

//$tests = [];
//$tests[] = [1, 2, 4, 5, 6]; /*шанс*/
//$tests[] = [1, 2, 4, 2, 6]; /*пара*/
//$tests[] = [1, 3, 2, 1, 3]; /*две пары*/
//$tests[] = [1, 1, 1, 5, 6]; /*сэт*/
//$tests[] = [1, 3, 4, 5, 6]; /*малый стрит*/
//$tests[] = [2, 3, 4, 5, 6]; /*большой стрит*/
//$tests[] = [1, 1, 3, 3, 3]; /*фул хаус*/
//$tests[] = [4, 4, 6, 4, 4]; /*каре*/
//$tests[] = [5, 5, 5, 5, 5]; /*покер*/
//
//foreach ($tests as $test) {
//
//    showName($test);
//}

/**************************************/


function showName(array $dice): void
{
    $diceName = waterfall($dice);

    echo $diceName . " for " . implode(" ", $dice) . PHP_EOL;
}

function waterfall(array $dice): string
{
    $name = null;

    $variations = [];
    $variations[] = new Pocker();
    $variations[] = new Four();
    $variations[] = new FullHouse();
    $variations[] = new BigStraight();
    $variations[] = new SmallStraight();
    $variations[] = new Three();
    $variations[] = new DoubleTwo();
    $variations[] = new Two();
    $variations[] = new Chance();

    foreach ($variations as $variation) {
        if ($variation->check($dice)) {
            $name = $variation->getName();
            break;
        }
    }

    if (!$name) {
        throw new Exception("Error: [waterfall] not found variation for " . implode(" ", $dice));
    }

    return $name;
}
