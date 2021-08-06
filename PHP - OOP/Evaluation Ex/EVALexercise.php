<?php
/*
  -- Exercise (45min) :
    Create a function to convert a specific amount from Euro to Japanese Yen OR from Yen to Euro.
    This function has 2 arguments:
  - The amount (int type or float type)
  - The currency (EUR or YEN).
  If the second argument is EUR, the function will convert to YEN
  If the second argument is YEN, the function will convert to EUR
  Display a message inclunding the currencies. Exple : '2 euros = 259,32 Yen'
  You have to perform the necessary verifications in order to validate the type of arguments. Make sure it's a valid amount.
  F.Y.I : 1euro = 129,66 Yen
*/

function converter($amount, $currency)
{

    $ONE_YEN_VALUE = 129.66;

    $results = '';
    $amountConvert = '';

    if ($currency === 'EUR' || $currency === 'YEN' && $amount > 0 && is_numeric($amount)) {
        if ($currency === 'EUR') {
            $amountConvert = $amount * $ONE_YEN_VALUE;

            echo "$amount $currency = $amountConvert YEN";
        }

        if ($currency === 'YEN') {
            $amountConvert = $amount / $ONE_YEN_VALUE;

            echo "$amount $currency = $amountConvert EUR";
        }
    } else {
        echo "Error for currency. Insert EUR or YEN";
    }
}

converter(5.00, 'EUR');
echo '<br>';
converter(580, 'YEN');
