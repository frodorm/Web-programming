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
echo "\n$threeHundredBucks";

echo "\n";

$zeroPointThreeHundredBucks = 0.3;
echo "$zeroPointThreeHundredBucks\n";

echo 6 + 6;

$last_month = 1187.23;
$this_month = 1089.98;
echo "\n",$last_month - $this_month,"\n";

// задание 11
$num_languages = 4;
$months = 11;

$days = 16*$months;

$days_per_language = $days / 4;

echo "$days_per_language\n";

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
echo "\n$answer\n";

// задание 14
$a = 10;
$b = 3;
$result = $a % $b;
echo "$result\n";

if($result === 0)
{
    $result = $a/$b;
    echo "Делится $result\n";
}
else
{
    echo "Не делится $result\n";
}

$st = pow(2, 10);

echo sqrt(245);

$mas = [4,2,5,19,13,0,10];
$sum = 0;
foreach ($mas as $x)
{
    $sum += pow($x,2);
}

echo "\n", sqrt($sum);

$sqrt1 = round(sqrt(379));
$sqrt2 = round(sqrt(379),1);
$sqrt3 = round(sqrt(379),2);

$sqrt = sqrt(587);
$sqrtF = floor($sqrt);
$sqrtC = ceil($sqrt);
$arr = ['floor' => $sqrtF, 'ceil' => $sqrtC];

$min = min(4, -2, 5, 19, -130, 0, 10);
$max = max(4, -2, 5, 19, -130, 0, 10);

echo "\n", rand(1, 100), "\n";

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

echo "\n";
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
        echo "\n$n\n";
        break;
    }
    $n += 1;
}

// задание 15
function printStringReturnNumber($str)
{
    echo "$str\n";
    return intval($str);
}

$my_num = printStringReturnNumber("1");

echo "$my_num\n";

// задание 16
function increaseEnthusiasm($str)
{
    return $str."!";
}

echo increaseEnthusiasm("I love my mum"), "\n";

function repeatThreeTimes($str)
{
    return $str.$str.$str;
}

echo repeatThreeTimes("pivo"), "\n";

function cut($str, $howMuch = 10)
{
    return substr($str, 0, $howMuch);
}
function masElem($mas, $i = 0)
{
    echo $mas[$i], " ";
    ++$i;
    if($i < count($mas))
    {
        masElem($mas, $i);
    }
}
masElem([1,2,3,4,5,6,6,7,7,8,9]);
echo "\n";
function sumOfDigits($digits)
{
    $sum = 0;
    while ($digits > 9)
    {
        $sum = 0;
        while ($digits > 0)
        {
            $elem = $digits % 10;
            $sum += $elem;
            $digits = (int)($digits / 10);
        }
        $digits = $sum;
    }
    return $sum;
}
echo sumOfDigits(123456789), "\n";

//задание 17
$masX = ["x"];
for ($i = 1; $i <= 10; ++$i)
{
    $masX[$i] = $masX[$i - 1]."x";
}
foreach ($masX as $x)
{
    echo "$x\n";
}

function arrayFill($elem, $count)
{
    $mas = [];
    for($i = 0; $i < $count; ++$i)
    {
        $mas[$i] = $elem;
    }
    return $mas;
}
$tmp = arrayFill("x", 5);

$mas = [[1 ,2 ,3], [4, 5], [6]];
$sum = 0;
foreach ($mas as $maklygin)
{
    foreach ($maklygin as $x)
    {
        $sum += $x;
    }
}

$mas = [];
$count = 1;
for($i = 0; $i < 3; ++$i)
{
    for($j = 0; $j < 3; ++$j)
    {
        $mas[$i][$j] = $count;
        ++$count;
    }
}

$mas = [2, 5, 3, 9];
$result = $mas[0]*$mas[1] + $mas[2]*$mas[3];
echo "$result\n";

$user = ['name' => "8", 'surname' => "S", 'patronymic' => "Marta!"];
echo $user['surname'], " ", $user['name'], " ", $user['patronymic'];

$date = ['year' => "2024", 'month' => "03", 'day' => "10"];
echo "\n", $date['year'], "-", $date['month'], "-", $date['day'], "\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr), "\n";

echo $arr[count($arr) - 1], " ", $arr[count($arr) - 2], "\n";


