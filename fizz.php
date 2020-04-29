<?php
//FizzBuzz
for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 == 0) {
	//multiples of both three and five output as "FizzBuzz".	
        echo 'FizzBuzz<br>';
    } elseif ($i % 3 == 0) {
	//multiples of three output "Fizz"	
        echo 'Fizz<br>';
    } elseif ($i % 5 == 0) {
	//multiples of five output "Buzz"	
        echo 'Buzz<br>';
    } else {	
        echo $i . '<br>';
    }
}
?>