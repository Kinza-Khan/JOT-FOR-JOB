<?php
$word = "noon" ;
$checkPalindDrome = strrev($word);
$final = strcmp($word , $checkPalindDrome);
if($final == 0){
    echo 'string is palindrome' ;
}
else{
    echo "not palindrome";
}

?>