<?php
function comp($a1, $a2) {
if ($a1 === null || $a2 === null || count($a1) != count($a2)) {
	return false;
}
if ($a1 === [] && $a2===[]) {
	return true;
}
sort($a1);
sort($a2);
for ($i=0; $i < count($a1); $i++) {
    if ($a1[$i]==sqrt($a2[$i])) {
    	$check = true;
    }else{
    	return false;
    }
}
return $check;
}

print_r(comp([2,2,3],[4,4,9]));