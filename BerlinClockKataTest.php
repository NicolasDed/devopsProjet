<?php


use PHPUnit\Framework\TestCase;
require 'BerlinClockKata.php';

class BerlinClockKataTest extends TestCase
{
    // single minutes lamps
    public function testSingleMinutesLampsGiven0ShouldReturn0()
    {
        $berlinclockkata = new BerlinClockKata(0,0,0);
        $actual = $berlinclockkata->singleMinutesLamps();
        $this->assertEquals("O O O O", $actual);
    }

    public function testSingleMinutesLampsGiven6ShouldReturn1()
    {
        $berlinclockkata = new BerlinClockKata(0, 6, 0);
        $actual = $berlinclockkata->singleMinutesLamps();
        $this->assertEquals("Y O O O", $actual);
    }

    public function testSingleMinutesLampsGiven12ShouldReturn2()
    {
        $berlinclockkata = new BerlinClockKata(0, 12, 0);
        $actual = $berlinclockkata->singleMinutesLamps();
        $this->assertEquals("Y Y 0 0", $actual);
    }

    public function testSingleMinutesLampsGiven18ShouldReturn3()
    {
        $berlinclockkata = new BerlinClockKata(0, 18, 0);
        $actual = $berlinclockkata->singleMinutesLamps();
        $this->assertEquals("Y Y Y O", $actual);
    }

    public function testSingleMinutesLampsGiven24ShouldReturn4()
    {
        $berlinclockkata = new BerlinClockKata(0, 24, 0);
        $actual = $berlinclockkata->singleMinutesLamps();
        $this->assertEquals("Y Y Y Y", $actual);
    }


    // five minutes lamps
    public function testFiveMinutesLampsGiven0ShouldReturn0()
    {
        $berlinclockkata = new BerlinClockKata(0, 0, 0);
        $actual = $berlinclockkata->fiveMinutesLamps();
        $this->assertEquals("O O O O O O O O O O O", $actual);
    }

    public function testFiveMinutesLampsGiven5ShouldReturn1()
    {
        $berlinclockkata = new BerlinClockKata(0, 5, 0);
        $actual = $berlinclockkata->fiveMinutesLamps();
        $this->assertEquals("Y O O O O O O O O O O", $actual);
    }

    public function testFiveMinutesLampsGiven9ShouldReturn1()
    {
        $berlinclockkata = new BerlinClockKata(0, 9, 0);
        $actual = $berlinclockkata->fiveMinutesLamps();
        $this->assertEquals("Y O O O O O O O O O O", $actual);
    }

    public function testFiveMinutesLampsGiven10ShouldReturn2()
    {
        $berlinclockkata = new BerlinClockKata(0, 10, 0);
        $actual = $berlinclockkata->fiveMinutesLamps();
        $this->assertEquals("Y Y O O O O O O O O O", $actual);
    }

    public function testFiveMinutesLampsGiven15ShouldReturn3()
    {
        $berlinclockkata = new BerlinClockKata(0, 15, 0);
        $actual = $berlinclockkata->fiveMinutesLamps();
        $this->assertEquals("Y Y R O O O O O O O O", $actual);
    }

    public function testFiveMinutesLampsGiven59ShouldReturn11()
    {
        $berlinclockkata = new BerlinClockKata(0, 59, 0);
        $actual = $berlinclockkata->fiveMinutesLamps();
        $this->assertEquals("Y Y R Y Y R Y Y R Y Y", $actual);
    }


    // single hours lamps
    public function testSingleHoursLampsGiven0ShouldReturn0()
    {
        $berlinclockkata = new BerlinClockKata(0, 0, 0);
        $actual = $berlinclockkata->singleHoursLamps();
        $this->assertEquals("O O O O", $actual);
    }

    public function testSingleHoursLampsGiven11ShouldReturn1()
    {
        $berlinclockkata = new BerlinClockKata(11, 0, 0);
        $actual = $berlinclockkata->singleHoursLamps();
        $this->assertEquals("R O O O", $actual);
    }

    public function testSingleHoursLampsGiven12ShouldReturn2()
    {
        $berlinclockkata = new BerlinClockKata(12, 0, 0);
        $actual = $berlinclockkata->singleHoursLamps();
        $this->assertEquals("R R O O", $actual);
    }

    public function testSingleHoursLampsGiven13ShouldReturn3()
    {
        $berlinclockkata = new BerlinClockKata(13, 0, 0);
        $actual = $berlinclockkata->singleHoursLamps();
        $this->assertEquals("R R R O", $actual);
    }

    public function testSingleHoursLampsGiven14ShouldReturn4()
    {
        $berlinclockkata = new BerlinClockKata(14, 0, 0);
        $actual = $berlinclockkata->singleHoursLamps();
        $this->assertEquals("R R R R", $actual);
    }


    // five hours lamps
    public function testFiveHoursLampsGiven0ShouldReturn0()
    {
        $berlinclockkata = new BerlinClockKata(0, 0, 0);
        $actual = $berlinclockkata->fiveHoursLamps();
        $this->assertEquals("O O O O", $actual);
    }

    public function testFiveHoursLampsGiven6ShouldReturn1()
    {
        $berlinclockkata = new BerlinClockKata(6, 0, 0);
        $actual = $berlinclockkata->fiveHoursLamps();
        $this->assertEquals("R O O O", $actual);
    }

    public function testFiveHoursLampsGiven12ShouldReturn2()
    {
        $berlinclockkata = new BerlinClockKata(12, 0, 0);
        $actual = $berlinclockkata->fiveHoursLamps();
        $this->assertEquals("R R O O", $actual);
    }


    // seconds lamps
    public function testSecondsLampGiven0ShouldReturn1()
    {
        $berlinclockkata = new BerlinClockKata(0, 0, 0);
        $actual = $berlinclockkata->secondsLamp();
        $this->assertEquals("R", $actual);
    }

    public function testSecondsLampGiven1ShouldReturn0()
    {
        $berlinclockkata = new BerlinClockKata(0, 0, 1);
        $actual = $berlinclockkata->secondsLamp();
        $this->assertEquals("O", $actual);
    }

    // clock maker
    public function testClockMakerGiven00h00m00s()
    {
        $berlinclockkata = new BerlinClockKata(0, 0, 0);
        $actual = $berlinclockkata->clockMaker();
        $this->assertEquals("Y" + "O O O O" + "O O O O" + "0 0 0 0 0 0 0 0 0 0 0" + "0 0 0 0", $actual);
    }

    public function testClockMakerGiven23h59m59s()
    {
        $berlinclockkata = new BerlinClockKata(23, 59, 59);
        $actual = $berlinclockkata->clockMaker();
        $this->assertEquals("O" + "R R R R" + "R R R O" + "Y Y R Y Y R Y Y R Y Y" + "Y Y Y Y", $actual);
    }

}
