<?php
for ($i=1; $i <= 15; $i++) { 
    if (
    $i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz, " ;
    }
    elseif ($i % 5 == 0) {
        echo "Buzz, ";
    }
    elseif ($i % 3 == 0 ) {
        echo "Fizz, ";
    }
    else{
        echo $i."," ;
    }
}

?>
