<?php

class BerlinClockKata
{
    public $hours, $minutes, $seconds;

    public function __construct(int $hours, int $minutes, int $seconds) {
        $this->hours = hours;
        $this->minutes = minutes;
        $this->seconds = seconds;
    }

    public function minuteLamps()
    {
        return 0;
    }
}