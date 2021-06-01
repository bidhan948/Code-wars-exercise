<?php

function bouncingBall(float $h, float $bounce, float $window)
{
    if ($h <= 0 || $bounce >= 1 || $bounce <= 0 || $window >= $h) {
        return -1;
    }
    $result = 0;
    
    do {
        if ($h>$window) {
            $h = $h * $bounce;
        }
        $result++;
        if ($h>$window) {
            $result++;
        }
    } while ($h > $window);

    return $result;
}

echo bouncingBall(30.0,0.66, 1.5);
