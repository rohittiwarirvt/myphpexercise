<?php


echo "Enter the Experience";

$exp = trim(fgets(STDIN));

echo "Enter the age of the person";

$age = trim(fgets(STDIN));

$salary = 0;

if ( $age >35) {
  $salary = $exp ? 6000: 2000;

} else if ($age >=28) {
  $salary = $exp ? 4800 : 2000;
} else {
  $salary = $exp ?  3000: 2000;
}

echo $salary;

exit;
?>
