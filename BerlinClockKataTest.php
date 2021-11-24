<?php


use PHPUnit\Framework\TestCase;
require 'BerlinClockKata.php';

class BerlinClockKataTest extends TestCase
{
    public function testSingleMinutesLampsGiven0ShouldReturn0()
    {
        // arrange
        $berlinclockkata = new BerlinClockKata();
        // act
        $actual = $berlinclockkata->singleMinutesLamps();
        // assert
        $this->assertEquals(0, $actual);
    }

    public function testFiveMinutesLampsGiven0ShouldReturn0()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->fiveMinutesLamps();
        $this->assertEquals(0, $actual);
    }

    public function testSingleHoursLampsGiven0ShouldReturn0()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->singleHoursLamps();
        $this->assertEquals(0, $actual);
    }

    public function testFiveHoursLampsGiven0ShouldReturn0()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->fiveHoursLamps();
        $this->assertEquals(0, $actual);
    }

    public function testSecondsLampGiven0ShouldReturn0()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->secondsLamp();
        $this->assertEquals(0, $actual);
    }
}
