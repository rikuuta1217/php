<?php
function outputNumber($a)
{
    echo "引数の値は" . $a . "です";
    return;
}

outputNumber(2);

echo "<br />";

function outputHello()
{
    echo "Hello world";
}

outputHello();

echo "<br />";

function text($number1,$number2)
{
    $value = $number1 + $number2;
    return $value;
}

$total = text(2,4);
echo $total;

echo "<br />";

function addNumber($a,$b)
{
    $add = $a + $b;
    return $add;
}

$total = addNumber(2,3);
echo $total;

echo "<br />";

function exam($score1,$score2,$score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210) {
        echo $total . "点なので合格です";
    }   else {
        echo $total . "点なので不合格です";
    }
}
echo (exam(80,60,90));