<?php
define("Value_of_Pi",3.14,true); //default false
define("Value_of_Gravity",9.8,true);
echo "PI VALUE : " . Value_of_Pi;
echo "<br/>G VALUE : " . Value_of_Gravity;

echo "<hr>";
echo "PI VALUE: ", VALUE_OF_PI; 
        //Shows Error in IDE, in browser displays the text as it is

echo "<hr>";
echo "Gravity VALUE : " . VALUE_OF_GRAVITY;
echo "<br/>";
echo "Value of gravity calling by the constant func : ";
echo constant("value_of_gravity");

?>
