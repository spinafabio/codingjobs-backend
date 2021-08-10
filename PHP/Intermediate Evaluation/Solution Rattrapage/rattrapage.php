<?php

    // Declare function
    function converter($amount, $currency){
        // You can use gettype, is_int, is_float etc.....
        if(gettype($amount) == 'integer' || gettype($amount) =='double'){
                switch($currency){
                    case 'YEN':
                        echo $amount. 'YEN = '.$amount/129.5. ' EUR<br>';
                        break;
                    case 'EUR':
                        echo $amount. 'EUR = ' . $amount*129.5. ' YEN<br>';
                        break;
                    default:
                        echo 'currency must be EUR or YEN<br>'; 

            }
            else
                echo 'currency must be EUR or YEN<br>'; 
        }
        else
           echo 'Amont muss be a number<br>'; 
    }

    // Call/Use the function
    converter(2, 'EUR');
    converter(1000000, 'YEN');
    converter('e', 'me'); // This will not work
?>