<?php
function countBits(int $n) 
{
if ($n == 0) {
    return 0;
}
 $result = 0;
 $Bit_count = 0;
    while ($n > 0) {
        $result = $n % 2;
        $n = (int)($n/2);
        $array[][] = $result;
    }
    $binary_num_array = array_reverse($array);
    for ($i=0; $i < count($binary_num_array); $i++) {
        if (in_array(1,$binary_num_array[$i])) {
            $Bit_count++;
        }
    }
    return $Bit_count;
}
echo'<pre>';
print_r(countBits(7));

//Just found out there is built in function in php to convert decimal number system into binary however if you want to 
//  code from the core then follow above code :)

function countBitsAnother($n) 
{
  return substr_count(decbin($n), 1);
}