<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function multipleOfThreeReturnsFizz()
    {
        $example = new FizzBuzz(3);

        $this->assertEquals("Fizz",$example->checkIfNumberIsFizz());
    }

    /**
     * @test
     */
    public function multipleOfFiveReturnsBuzz()
    {
        $example = new FizzBuzz(5);

        $this->assertEquals("Buzz",$example->checkIfNumberIsBuzz());
    }

    /**
     * @test
     */
    public function multipleOfThreeAndFiveReturnsFizzBuzz()
    {
        $example = new FizzBuzz(45);

        $this->assertEquals("FizzBuzz",$example->checkIfNumberIsFizzBuzz());
    }

}