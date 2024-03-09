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
echo "<br/>";
echo $last_month - $this_month;
echo"<br/>";

// задание 11
$num_languages = 4;
$months = 11;

$days = 16*$months;

$days_per_language = $days / 4;

echo "$days_per_language<br/>";

// задание 12
echo 8**2;

