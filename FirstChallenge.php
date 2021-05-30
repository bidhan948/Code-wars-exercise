<!-- WAP to display all the factors of a integer number in  ascending 
array format but the array should not contain 1 and the number itself but if the prime number comes 
it should return a stirng syaing given number is prime number -->

<?php
function divisors(int $integer)
{
  if (IsPrime($integer)) {
    return $integer . " is a prime number";
  }
  $array = []; //initializing a blank array
  for ($i = 2; $i < $integer; $i++) {
    if ($integer % $i == 0) {
      $array[] = $i;
    }
  }
  return $array;
}

// function to check prime number or not
function IsPrime($n): bool
{
  for ($x = 2; $x < $n; $x++) {
    if ($n % $x == 0) {
      return false;
    }
  }
  return true;
}
