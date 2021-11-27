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

    public function singleMinutesLamps():string
    {
        if($this->minutes %5 != 0) {
            if ($this->minutes % 5 == 4)
                return "Y Y Y Y O<br>";
            if ($this->minutes % 5 == 3)
                return "Y Y Y O O<br>";
            if($this->minutes %5 == 2)
                return "Y Y O O O<br>";
            if($this->minutes %5 == 1)
                return "Y O O O O<br>";
        }
        return "O O O O O<br>";
    }

    public function fiveMinutesLamps():string
    {
        if($this->minutes %5 == 0){
            if($this->minutes >=55)
                return "Y Y R Y Y R Y Y R Y Y O<br>";
            if($this->minutes >=50)
                return "Y Y R Y Y R Y Y R Y O O<br>";
            if($this->minutes >=45)
                return "Y Y R Y Y R Y Y R O O O<br>";
            if($this->minutes >=40)
                return "Y Y R Y Y R Y Y O O O O<br>";
            if($this->minutes >=35)
                return "Y Y R Y Y R Y O O O O O<br>";
            if($this->minutes >=30)
                return "Y Y R Y Y R O O O O O O<br>";
            if($this->minutes >=25)
                return "Y Y R Y Y O O O O O O O<br>";
            if($this->minutes >=20)
                return "Y Y R Y O O O O O O O O<br>";
            if($this->minutes >=15)
                return "Y Y R O O O O O O O O O<br>";
            if($this->minutes >=10)
                return "Y Y O O O O O O O O O O<br>";
            if($this->minutes >=5)
                return "Y O O O O O O O O O O O<br>";
        }
        return "O O O O O O O O O O O O<br>";
    }

    public function singleHoursLamps():string
    {
        if($this->hours %5 !=0){
            if($this->hours %5 ==4)
                return "R R R R<br>";
            if($this->hours %5 ==3)
                return "R R R O<br>";
            if($this->hours %5 ==2)
                return "R R O O<br>";
            if($this->hours %5 ==1)
                return "R O O O<br>";
        }
        return "O O O O<br>";
    }

    public function fiveHoursLamps():string
    {
        if($this->hours %5 == 0){
            if($this->hours >=20)
                return "R R R R<br>";
            if($this->hours >=15)
                return "R R R O<br>";
            if($this->hours >=10)
                return "R R O O<br>";
            if($this->hours >=5)
                return "R O O O<br>";
        }
        return "O O O O<br>";
    }

    public function secondsLamp():string
    {
        if ($this->seconds %2 == 0){
            return"R<br>";
        }
        return "O<br>";
    }

    public function clockMaker()
    {
        return
        $this->secondsLamp() +
        $this->fiveHoursLamps() +
        $this->singleHoursLamps() +
        $this->fiveMinutesLamps() +
        $this->singleMinutesLamps();
    }


}