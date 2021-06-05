<?php
function expanded_form(int $n):string{
$r= 10;
$result= "";
$array = array_filter(str_split($n),'is_numeric');
$count = count($array);
	for ($i=0; $i < count($array) ; $i++) {
			$count--;
		if($array[$i] != 0){
			$result .= " + ". $array[$i]*pow(10, $count); 			
		}
	}
	$result = trim($result," + ");
	return $result;
}
echo expanded_form(70304);