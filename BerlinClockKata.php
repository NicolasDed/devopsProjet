<?php

class BerlinClockKata
{
    public $hours, $minutes, $seconds;

    public function __construct(int $hours, int $minutes, int $seconds) {
        $this->hours = hours;
        $this->minutes = minutes;
        $this->seconds = seconds;
    }

    public function singleMinutesLamps()
    {
        return 0;
    }

    public function fiveMinutesLamps()
    {
        return 0;
    }

    public function singleHoursLamps()
    {
        return 0;
    }

    public function fiveHoursLamps()
    {
        return 0;
    }

    public function secondsLamp()
    {
        if ($this->seconds %2 == 0){
            echo "Y<br>";
            return 0;
        }
        echo "O<br>";
        return 1;
    }


}