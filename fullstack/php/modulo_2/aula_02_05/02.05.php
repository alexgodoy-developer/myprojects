<?php

$operator_a = 5;
$operators = [
    "a += 5" => ($operator_a += 5),
    "a -= 5" => ($operator_a -= 5),
    "a *= 5" => ($operator_a *= 5),
    "a /= 5" => ($operator_a /= 5)
];

echo"<pre>";
var_dump($operators);
echo"</pre>";

$incrementA = 5;
$incrementB = 5;
$increment = [
    "pós-increment" => $incrementA++,
    "res-increment" => $incrementA,
    "pre-increment" => ++$incrementA,
    "pós-decrement" => $incrementA--,
    "res-decrement" => $incrementA,
    "pre-decrement" => --$incrementA
];

echo"<pre>";
var_dump($increment);
echo"</pre>";

//----------------------------------------------------------

$relatedA = 5;
$relatedB = "5";
$relatedC = 10;

$related = [
    "a == c" => ($relatedA == $relatedC),
    "a == b" => ($relatedA == $relatedB),
    "a === b" => ($relatedA === $relatedB),
    "a != b" => ($relatedA != $relatedB),
    "a !==" => ($relatedA !== $relatedB),
    "a > c" => ($relatedA > $relatedC),
    "a < c" => ($relatedA < $relatedC),
    "a >= b" => ($relatedA >= $relatedB),
    "a >= c" => ($relatedA >= $relatedC),
    "a <= c" => ($relatedA <= $relatedC)
];

echo"<pre>";
var_dump($related);
echo"</pre>";

//----------------------------------------------

$logicA = true;
$logicB = false;
$logic = [
    "a && b" => ($logicA && $logicB),
    "a || b" => ($logicA || $logicB),
    "a" => ($logicA),
    "! a" => (!$logicA) ,
    "! b" => (!$logicB)
];

echo"<pre>";
var_dump($logic);
echo"</pre>";

//----------------------------------------------

$calcA = 5;
$calcB = 10;
$calc = [
    "a + b" => ($calcA + $calcB),
    "a - b" => ($calcA - $calcB),
    "a * b" => ($calcA * $calcB),
    "a / b" => ($calcA / $calcB),
    "a % b" => ($calcA % $calcB)

];

echo"<pre>";
var_dump($calc);
echo"</pre>";



