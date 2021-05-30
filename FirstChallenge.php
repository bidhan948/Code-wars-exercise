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
