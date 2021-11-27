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
        if($this->minutes %5 != 0) {
            if ($this->minutes % 5 == 4)
                echo "Y Y Y Y O<br>";
            else if ($this->minutes % 5 == 3)
                echo "Y Y Y O O<br>";
            else if($this->minutes %5 == 2)
                echo "Y Y O O O<br>";
            else if($this->minutes %5 == 1)
                echo "Y O O O O<br>";
        }
        echo "O O O O O<br>";
        return 0;
    }

    public function fiveMinutesLamps()
    {
        if($this->minutes %5 == 0)
            return
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
            return 1;
        }
        echo "O<br>";
        return 0;
    }


}