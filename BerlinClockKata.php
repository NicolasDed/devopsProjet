<?php

class BerlinClockKata
{
    public $hours, $minutes, $seconds;

    public function __construct($hours, $minutes, $seconds) {
        $this->hours = $hours;
        if(!is_int($hours) || $hours < 0)
            throw new InvalidArgumentException();

        $this->minutes = $minutes;
        if(!is_int($minutes) || $minutes < 0)
            throw new InvalidArgumentException();

        $this->seconds = $seconds;
        if(!is_int($seconds) || $seconds < 0)
            throw new InvalidArgumentException();
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
        return 0;
    }


}