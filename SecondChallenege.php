<!-- Complete the method/function so that it converts dash/underscore 
delimited words into camel casing. The first word within the output 
should be capitalized only if the original word was capitalized 
(known as Upper Camel Case, also often referred to as Pascal case). -->

<?php
function toCamelCase($str)
{
    $final_word = "";
    $removing_schars = "";
    $first_special_char_count = 0;
    if (strrpos($str, "-") || strrpos($str, "_")) {
        if (strrpos($str, "_")) {
            $first_special_char_count = stripos($str, "_");
            $trim = trim($str, substr($str, 0, $first_special_char_count)); //plucking out first word from the sentences
            $final_word = helper($trim, "_");
        }
        $dash_value = substr($str,0,$first_special_char_count);
        if (strrpos($dash_value,'-')) {
           $value = helper($dash_value,"-");
           return $value.$final_word;
        }
        if (strrpos($final_word,'-')) {
           $final_word = helper($final_word,"-");
        }
        if (strrpos($str, "-") && $final_word == "") {
            $first_special_char_count = stripos($str, "-");  //counting the position up to special character 
            $trim = trim($str, substr($str, 0, $first_special_char_count)); //plucking out first word from the sentences
            $removing_schars = str_replace("-", " ", $trim); //Replacing "-" with "<space>"
            $wordsCapital = ucwords($removing_schars);   //Capitalizing first letter of each words
            $final_word = str_replace(" ", "", $wordsCapital);
        }
        if (strrpos($final_word, "_")) {
            $final_word = helper($final_word, "_");
        }
        return  substr($str, 0, $first_special_char_count) . $final_word; //Returning a final word by concatinating a first word infront of it
    }
    return $str;
}

function helper(string $string, $special_chars)
{
    $removing_schars = str_replace($special_chars, " ", $string); //Replacing "_" with "<space>"
    $wordsCapital = ucwords($removing_schars);   //Capitalizing first letter of each words
    $string = str_replace(" ", "", $wordsCapital);
    return $string;
}

echo toCamelCase("the_Stealth-warrior");
