<?php
include_once('FizzBuzz.php');

class FizzBuzzTest
{
    public function testFizz3()
    {
        $number = 3;
        $expected = "Fizz";

        $result = new FizzBuzz($number);
        $equal = $this->assertEquals($expected, $result);
        if ($equal) {
            return "3";
        } else {
            return "!3";
        }
    }
    /**
     *
     * Description for function
     *
     * @param    type  $expected Description
     * @param    type  $result Description
     *
     * @return      type
     *
     */

    function assertEquals($expected, $result)
    {
        if ($expected == $result) {
            return true;
        } else {
            echo false;
        }
    }

    public function testFizz6()
    {
        $number = 6;
        $expected = "Fizz";

        $result = new FizzBuzz($number);
        $equal = $this->assertEquals($expected, $result);
        if ($equal) {
            return "6";
        } else {
            return "!6";
        }
    }

    public function testFizz5()
    {
        $number = 5;
        $expected = "Buzz";

        $result = new FizzBuzz($number);
        $equal = $this->assertEquals($expected, $result);
        if ($equal) {
            return "5";
        } else {
            return "!5";
        }
    }

    public function testFizz15()
    {
        $number = 15;
        $expected = "FizzBuzz";

        $result = new FizzBuzz($number);
        $equal = $this->assertEquals($expected, $result);
        if ($equal) {
            return "15";
        } else {
            return "!15";
        }
    }

    public function testFizz7()
    {
        $number = 7;
        $expected = $number . "";
        $result = new FizzBuzz($number);
        $equal = $this->assertEquals($expected, $result);
        if ($equal) {
            return "7";
        } else {
            return "!7";
        }
    }

    function __toString()
    {
        return  $this->testFizz3() . "<br>" .
            $this->testFizz5() . "<br>" .
            $this->testFizz6() . "<br>" .
            $this->testFizz7() . "<br>" .
            $this->testFizz15() . "<br>";
    }
}
