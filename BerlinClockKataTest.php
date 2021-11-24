<?php


use PHPUnit\Framework\TestCase;
require 'BerlinClockKata.php';

class BerlinClockKataTest extends TestCase
{
    public function testMinuteLampsGiven0ShouldReturn0()
    {
        // arrange
        $berlinclockkata = new BerlinClockKata();
        // act
        $actual = $berlinclockkata->minuteLamps();
        // assert
        $this->assertEquals(0, $actual);
    }
}
