<!-- Complete the method/function so that it converts dash/underscore 
delimited words into camel casing. The first word within the output 
should be capitalized only if the original word was capitalized 
(known as Upper Camel Case, also often referred to as Pascal case). -->

<?php

function toCamelCase($str){
    $removing_schars ="";
    $trim = trim($str,substr($str,0,1)); //plucking out first letter from the sentences
    if (strrpos($trim,"-")) {
        $removing_schars = str_replace("-"," ",$trim); //Replacing "-" with "<space>"
        $wordsCapital = ucwords($removing_schars);   //Capitalizing first letter of each words
        $final_word = str_replace(" ","",$wordsCapital);  //now removing <space>
    }
    if (strpos($trim,"_")) {
        $removing_schars = str_replace("_","",$trim); ///Replacing "-" with "<space>"
        $wordsCapital = ucwords($removing_schars);
        $final_word = str_replace(" ","",$wordsCapital);
    }
    return substr($str,0,1).$final_word; //Returning a final word by concatinating a first letter infront of it
}

echo toCamelCase("The_Stealth_Warrior"); 