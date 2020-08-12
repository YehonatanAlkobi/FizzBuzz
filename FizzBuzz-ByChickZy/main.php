<?php
class FizzBuzz
{
    public function generate(int $limit): void
    {
        for ($number = 1; $number <= $limit; $number++) {
            if ($number % 3 === 0 && $number % 5 === 0) {
                echo "FizzBuzz\n";
              } else if ($number % 3 === 0) {
                echo "Fizz \n";
              } else if ($number % 5 === 0) {
                echo "Buzz\n";
              } else {
                echo "$number \n";
            }
        }
    }
}
$fizzbuzz = new FizzBuzz();
$fizzbuzz->generate(100);