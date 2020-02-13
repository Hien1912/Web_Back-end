<?php

class FizzBuzz
{
    public string $status;

    public function __construct($number)
    {
        $this->status = $this->convertNumberToStatus($number);
    }

    /**
     * Set the value of status from number
     *
     * @return  self
     */

    public function convertNumberToStatus($number)
    {
        $isDivisibleBy3 = $number % 3 == 0;
        $isDivisibleBy5 = $number % 5 == 0;

        if ($isDivisibleBy3 && $isDivisibleBy5) {
            return  "FizzBuzz";
        } elseif ($isDivisibleBy3) {
            return "Fizz";
        } elseif ($isDivisibleBy5) {
            return "Buzz";
        } else {
            return  "";
        }
    }

    public function __toString()
    {
        return $this->status;
    }
}
