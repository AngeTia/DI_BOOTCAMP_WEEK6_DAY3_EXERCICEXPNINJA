<?php

function totalOvers(int $balls): float | int | string
{
    $overs = floor($balls / 6);
    $ball = $balls % 6;

    return (float) $overs.'.'.$ball;
}
echo totalOvers(164);
