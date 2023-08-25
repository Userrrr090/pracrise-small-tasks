<?php

class Date
{
    private string $userDate;

    public function __construct($date = NULL)
    {
        if(!empty($date))
        {
            $this->userDate = strtotime($date);
        }
        else
        {
            $this->userDate = strtotime(date('Y-m-d'));
        }
    }

    public function getDay()
    {
        return date('d', $this->userDate) . ' - ' . date('l', $this->userDate);
    }

    public function getMonth($lang = null)
    {
        return date('m', $this->userDate) . ' - ' . date('M', $this->userDate);
    }

    public function getYear()
    {
        return date('Y', $this->userDate);
    }

    public function addDay($value)
    {
        $this->userDate += 3600 * 24 * $value;
    }

    public function subDay($value)
    {
        $this->userDate -= 3600 * 24 * $value;
    }

    public function addMonth($value)
    {
        $this->userDate = strtotime(date('Y-m-d', strtotime("+$value month", $this->userDate)));
    }

    public function subMonth($value)
    {
        $this->userDate -= 3600 * 24 * 30 * $value;
    }

    public function addYear($value)
    {
        $this->userDate = strtotime(date('Y-m-d', strtotime("+$value year", $this->userDate)));
    }

    public function subYear($value)
    {
        $this->userDate = strtotime(date('Y-m-d', strtotime("-$value year", $this->userDate)));
    }

    public function format()
    {
        return date('Y-m-d', $this->userDate);
    }

    public function __toString()
    {
        return date('Y-m-d', $this->userDate);
    }
}

class Interval
{
    private object $startDate;
    private object $finishDate;

    public function __construct($startDate,$finishDate)
    {
        $this->startDate = $startDate;
        $this->finishDate = $finishDate;
    }

    private function toSecInterval ()
    {
        return abs(strtotime($this->startDate->format()) - strtotime($this->finishDate->format()));
    }

    public  function toDays ()
    {
        return $this->toSecInterval() / ( 3600 * 24);
    }

    public function toMonth ()
    {
        return $this->toSecInterval() / ( 3600 * 24 * 31);
    }
    public function toYears ():float
    {
        return $this->toSecInterval() / ( 3600 * 24 * 31 * 12);
    }
}

$userDate1 = new Date('2025-05-05');
$userDate2 = new Date('2022-07-09');

$interval = new Interval($userDate1, $userDate2);

echo $interval->toYears();
echo PHP_EOL;
echo $interval->toMonth();
echo PHP_EOL;
echo $interval->toDays();
echo PHP_EOL;
/*$userDate = new Date('2022-07-09');

echo $userDate->getDay();
echo PHP_EOL;
echo $userDate->getMonth();
echo PHP_EOL;
echo $userDate->getYear();
echo PHP_EOL;
echo $userDate;
echo PHP_EOL;

$start = strtotime($userDate);
$userDate->addMonth(1);
$finish =  strtotime($userDate);
echo ($finish - $start) / 31 / 24 / 60;*/
