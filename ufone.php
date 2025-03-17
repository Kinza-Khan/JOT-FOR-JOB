<?php
$userPhoneNumber = "03429843554" ;
$ufoneCode = "0331,0332,0333,0334,0335,0336";
$ufoneCodeArray = explode(',',$ufoneCode);
print_r($ufoneCodeArray);
$userNumberSplit = str_split($userPhoneNumber ,4);
echo "<h1>". 'Hello' ."</h1>";
print_r($userNumberSplit);
echo "<h1>". 'Hello' ."</h1>";
if(!in_array($userNumberSplit[0] , $ufoneCodeArray)){
    echo "<h1>". 'Not Belongs to ufone family' ."</h1>";   
}
else{
    echo "<h1>". 'Belongs to ufone family' ."</h1>";  
}

?>