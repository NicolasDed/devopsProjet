<?php

class BerlinClockKata
{
    public $hours, $minutes, $seconds;

    public function __construct($hours, $minutes, $seconds) {
        $this->hours = $hours;
        if(!is_int($hours) || $hours < 0 || $hours > 23)
            throw new InvalidArgumentException();

        $this->minutes = $minutes;
        if(!is_int($minutes) || $minutes < 0 || $minutes > 59)
            throw new InvalidArgumentException();

        $this->seconds = $seconds;
        if(!is_int($seconds) || $seconds < 0 || $seconds > 59)
            throw new InvalidArgumentException();
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
        if($this->minutes %5 == 0){
            if($this->minutes >=55)
                echo "Y Y R Y Y R Y Y R Y Y O<br>";
            else if($this->minutes >=50)
                echo "Y Y R Y Y R Y Y R Y Y O<br>";
            else if($this->minutes >=45)
                echo "Y Y R Y Y R Y Y R Y Y O<br>";
            else if($this->minutes >=40)
                echo "Y Y R Y Y R Y Y R Y Y O<br>";
            else if($this->minutes >=35)
                echo "Y Y R Y Y R Y Y R Y Y O<br>";
            else if($this->minutes >=30)
                echo "Y Y R Y Y R Y Y R Y Y O<br>";
            else if($this->minutes >=25)
                echo "Y Y R Y Y R Y Y R Y Y O<br>";
            else if($this->minutes >=20)
                echo "Y Y R Y Y R Y Y R Y Y O<br>";
            else if($this->minutes >=15)
                echo "Y Y R Y Y R Y Y R Y Y O<br>";
            else if($this->minutes >=10)
                echo "Y Y R Y Y R Y Y R Y Y O<br>";
            else if($this->minutes >=5)
                echo "Y Y R Y Y R Y Y R Y Y O<br>";
        }
        echo "O O O O O O O O O O O O<br>";
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

    public function clockMaker()
    {
        return 0;
    }


}