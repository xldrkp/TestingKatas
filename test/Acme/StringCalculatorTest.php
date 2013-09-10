<?php

namespace Acme;

class StringCalculatorTest extends \PHPUnit_Framework_TestCase
{

    private $calculator;

    public function setUp()
    {
        $this->calculator = new StringCalculator();
    }

    public function testEmptyString()
    {
        $this->assertEquals(
            0,
            $this->calculator->add("")
        );
    }

    /**
     * @test
     */
    public function calculator_shows_correct_result_with_single_number()
    {
        $this->assertEquals(
            1,
            $this->calculator->add("1")
        );
    }

    /**
     * @test
     */
    public function calculator_shows_correct_result_with_two_numbers()
    {
        $this->assertEquals(
            3,
            $this->calculator->add("1,2")
        );
    }

    /**
     * @test
     */
    public function calculator_shows_correct_result_with_two_zeroes()
    {
        $this->assertEquals(
            0,
            $this->calculator->add("0,0")
        );
    }

    /**
     * @test
     */
    public function calculator_shows_correct_result_with_unknown_number_of_numbers()
    {
        $this->assertEquals(
            8,
            $this->calculator->add("3,1,4")
        );
    }

    /**
     * @test
     */
    public function calculator_allows_newline_delimiter()
    {
        $this->assertEquals(
            5,
            $this->calculator->add("1\n2\n2")
        );
    }
}
