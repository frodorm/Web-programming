<?php
// пункты в заданиях разделены абзацем
// задание 1
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " and sauce, please";

// Don't change the line below

echo "\nYour order is: $very_bad_unclear_name.";

// задание 2
// \n в браузере не переносит строку, погуглил, на стэковерфло
// написано использовать конструкцию <br/>
$threeHundredBucks = 300;
echo "<br/>$threeHundredBucks";

echo "<br/>";

$zeroPointThreeHundredBucks = 0.3;
echo "$zeroPointThreeHundredBucks<br/>";

echo 6 + 6;

$last_month = 1187.23;
$this_month = 1089.98;
echo "<br/>",$last_month - $this_month,"<br/>";

// задание 11
$num_languages = 4;
$months = 11;

$days = 16*$months;

$days_per_language = $days / 4;

echo "$days_per_language<br/>";

// задание 12
echo 8**2;

// задание 13
$my_num = 19;

$answer = $my_num;

$answer += 2;

$answer *= 2;

$answer -= 2;

$answer /= 2;

$answer -= $my_num;
echo "<br/>$answer<br/>";

// задание 14
$a = 10;
$b = 3;
$result = $a % $b;
echo "$result<br/>";

if($result === 0)
{
    $result = $a/$b;
    echo "Делится $result<br/>";
}
else
{
    echo "Не делится $result<br/>";
}

$st = pow(2, 10);

echo sqrt(245);

$mas = [4,2,5,19,13,0,10];
$sum = 0;
foreach ($mas as $x)
{
    $sum += pow($x,2);
}

echo "<br/>", sqrt($sum);

$sqrt1 = round(sqrt(379));
$sqrt2 = round(sqrt(379),1);
$sqrt3 = round(sqrt(379),2);

$sqrt = sqrt(587);
$sqrtF = floor($sqrt);
$sqrtC = ceil($sqrt);
$arr = ['floor' => $sqrtF, 'ceil' => $sqrtC];

$min = min(4, -2, 5, 19, -130, 0, 10);
$max = max(4, -2, 5, 19, -130, 0, 10);

echo "<br/>", rand(1, 100), "<br/>";

$randMas = [];
for ($i = 0; $i < 10; ++$i)
{
    $randMas[$i] = rand();
}

$a = 1;
$b = 2;
$mod1 = abs($a - $b);
$a = 46.3;
$b = 23.1;
$mod2 = abs($a - $b);

$mixedMas = [1, 2, -1, -2, 3, -3];
$absMas = [];
for($i = 0; $i < count($mixedMas); ++$i)
{
    $absMas[$i] = abs($mixedMas[$i]);
}
foreach($absMas as $x)
{
    echo $x, " ";
}

echo "<br/>";
$thirty = 30;
$fedya = [];
$n = 0;
for($i = 1; $i <= $thirty; ++$i)
{
    if($thirty % $i === 0)
    {
        $fedya[$n] = $i;
        ++$n;
    }
}
foreach($fedya as $x)
{
    echo $x, " ";
}

$iHaveArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$n = 0;
for($i = 0; $i < count($iHaveArray); ++$i)
{
    $sum += $iHaveArray[$i];
    if($sum > 10)
    {
        echo "<br/>$n<br/>";
        break;
    }
    $n += 1;
}

// задание 15
