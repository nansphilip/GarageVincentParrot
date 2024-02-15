<?php

class Schedule
{
    public $id;
    public $day;
    public $schedule;

    public function __construct($id, $day, $schedule)
    {
        $this->id = $id;
        $this->day = $day;
        $this->schedule = $schedule;
    }

    public function validate()
    {
        $this->id = dbFormatInt($this->id);
        $this->day = dbFormatString($this->day);
        $this->schedule = dbFormatString($this->schedule);
    }

    public function updateSchedules()
    {
    }

    public function getAll()
    {
    }
}
