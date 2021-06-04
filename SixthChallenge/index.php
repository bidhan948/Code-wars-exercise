<?php
function tribonacci($signature, $n) {
    if ($signature === []) {
        return 0;
    }
    if ($signature === null || $n === 0) {
        return [];
    }
    if ($n<=3) {
        for ($i=0; $i < $n; $i++) { 
            $array[] = $signature[$i];
        }
        return $array;
    }
    $a=0; $b=1; $c= 2;
    $array = array_slice($signature,0);

    for ($i=2; $i < $n-1; $i++) { 
        $array[] = $array[$a] + $array[$b] + $array[$c];
        $a++;
        $b++;
        $c++;
    }
    return $array;
}


print_r(tribonacci([1,1,1],10));