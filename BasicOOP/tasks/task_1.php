<?php

class Date
{
    public string $day;
    public string $month;
    public string $year;
    private string $date;

    public function __construct($day,$month,$year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
        $this->date = "$year-$month-$day";
    }

    public function __get(string $property)
    {
        if($property = 'weekDay')
        {
            return date('l', strtotime($this->date));
        }
    }
}

$weekDay = new Date('10', '07', '1999');

echo $weekDay->weekDay;