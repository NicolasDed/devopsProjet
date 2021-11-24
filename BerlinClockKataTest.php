<?php


use PHPUnit\Framework\TestCase;
require 'BerlinClockKata.php';

class BerlinClockKataTest extends TestCase
{
    // single minutes lamps
    public function testSingleMinutesLampsGiven0ShouldReturn0()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->singleMinutesLamps();
        $this->assertEquals(0, $actual);
    }

    public function testSingleMinutesLampsGiven6ShouldReturn1()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->singleMinutesLamps();
        $this->assertEquals(1, $actual);
    }

    public function testSingleMinutesLampsGiven12ShouldReturn2()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->singleMinutesLamps();
        $this->assertEquals(2, $actual);
    }

    public function testSingleMinutesLampsGiven18ShouldReturn3()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->singleMinutesLamps();
        $this->assertEquals(3, $actual);
    }

    public function testSingleMinutesLampsGiven24ShouldReturn4()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->singleMinutesLamps();
        $this->assertEquals(4, $actual);
    }


    // five minutes lamps
    public function testFiveMinutesLampsGiven0ShouldReturn0()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->fiveMinutesLamps();
        $this->assertEquals(0, $actual);
    }

    public function testFiveMinutesLampsGiven5ShouldReturn1()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->fiveMinutesLamps();
        $this->assertEquals(1, $actual);
    }

    public function testFiveMinutesLampsGiven9ShouldReturn1()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->fiveMinutesLamps();
        $this->assertEquals(1, $actual);
    }

    public function testFiveMinutesLampsGiven10ShouldReturn2()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->fiveMinutesLamps();
        $this->assertEquals(2, $actual);
    }

    public function testFiveMinutesLampsGiven15ShouldReturn3()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->fiveMinutesLamps();
        $this->assertEquals(3, $actual);
    }

    public function testFiveMinutesLampsGiven59ShouldReturn11()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->fiveMinutesLamps();
        $this->assertEquals(11, $actual);
    }


    // single hours lamps
    public function testSingleHoursLampsGiven0ShouldReturn0()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->singleHoursLamps();
        $this->assertEquals(0, $actual);
    }

    public function testSingleHoursLampsGiven11ShouldReturn1()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->singleHoursLamps();
        $this->assertEquals(1, $actual);
    }

    public function testSingleHoursLampsGiven12ShouldReturn2()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->singleHoursLamps();
        $this->assertEquals(2, $actual);
    }

    public function testSingleHoursLampsGiven13ShouldReturn3()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->singleHoursLamps();
        $this->assertEquals(3, $actual);
    }

    public function testSingleHoursLampsGiven14ShouldReturn4()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->singleHoursLamps();
        $this->assertEquals(4, $actual);
    }


    // five hours lamps
    public function testFiveHoursLampsGiven0ShouldReturn0()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->fiveHoursLamps();
        $this->assertEquals(0, $actual);
    }

    public function testFiveHoursLampsGiven6ShouldReturn1()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->fiveHoursLamps();
        $this->assertEquals(1, $actual);
    }

    public function testFiveHoursLampsGiven12ShouldReturn2()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->fiveHoursLamps();
        $this->assertEquals(2, $actual);
    }


    // seconds lamps
    public function testSecondsLampGiven0ShouldReturn0()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->secondsLamp();
        $this->assertEquals(0, $actual);
    }

    public function testSecondsLampGiven1ShouldReturn1()
    {
        $berlinclockkata = new BerlinClockKata();
        $actual = $berlinclockkata->secondsLamp();
        $this->assertEquals(1, $actual);
    }

}
