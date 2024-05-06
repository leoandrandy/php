<?php
function outputNumber($a)
{
  echo "引数の値は" . $a . "です" . '<br />';
  return;
}

outputNumber(2);

function outputHello()
{
  echo "Hello world" . '<br />';
}

outputHello(); 

function text($number1, $number2)
{
  $value = $number1 + $number2;
  return $value;
}

$total = text(2, 4);
echo $total . '<br />';

function addNumber($a, $b)
{
  $add = $a + $b;
  return $add;
}

$total = addNumber(2, 3);
print $total . '<br />';

function exam($score1, $score2, $score3)
{
  $total = $score1 + $score2 + $score3;
  if ($total > 210) {
    echo $total . "点なので合格です";
  } else {
    echo $total . "点なので不合格です";
  }
}
echo (exam(80, 60, 90));


function SquareArea($base, $height)
{
  return $base * $height;
}
function TriangleArea($base, $height)
{
  return $base * $height / 2;
}
function TrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo SquareArea(5, 5) . "\n";
echo TriangleArea(7, 8) . "\n";
echo TrapezoidArea(4, 5, 4);