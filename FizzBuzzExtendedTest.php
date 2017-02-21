<?php

namespace SergioDeCandelario\FizzBuzzExtendedKata;

/**
 * Test
 *
 * @author Sergio de Candelario <sergio.decandelario@gmail.com>
 */
class FizzBuzzExtendedTest extends \PHPUnit_Framework_TestCase
{
    public function test_normal_number_return_itself()
    {
        $stringCalculator = new StringCalculator(1);
        $result = $stringCalculator->calculate();

        $this->assertEquals(1, $result);
    }

    public function test_multiple_of_three_return_fizz()
    {
        $fizzBuzz = new StringCalculator(6);
        $result = $fizzBuzz->calculate();

        $this->assertEquals('fuzz fizz', $result);
    }

    public function test_multiple_of_five_return_buzz()
    {
        $fizzBuzz = new StringCalculator(10);
        $result = $fizzBuzz->calculate();

        $this->assertEquals('fuzz buzz', $result);
    }

    public function test_multiple_of_three_and_five_return_fizz_buzz()
    {
        $fizzBuzz = new StringCalculator(15);
        $result = $fizzBuzz->calculate();

        $this->assertEquals('fizz buzz', $result);
    }

    public function test_multiple_of_seven_return_pop()
    {
        $fizzBuzz = new StringCalculator(14);
        $result = $fizzBuzz->calculate();

        $this->assertEquals('fuzz pop', $result);
    }

    public function test_multiple_of_three_and_seven_return_fizz_pop()
    {
        $fizzBuzz = new StringCalculator(21);
        $result = $fizzBuzz->calculate();

        $this->assertEquals('fizz pop', $result);
    }

    public function test_multiple_of_five_and_seven_return_buzz_pop()
    {
        $fizzBuzz = new StringCalculator(35);
        $result = $fizzBuzz->calculate();

        $this->assertEquals('buzz pop', $result);
    }

    public function test_multiple_of_three_five_and_seven_return_fizz_buzz_pop()
    {
        $fizzBuzz = new StringCalculator(105);
        $result = $fizzBuzz->calculate();

        $this->assertEquals('fizz buzz pop', $result);
    }
}
