<?php

class Schedule {
    public $idSchedule;
    public $day;
    public $schedule;

    public function __construct($idSchedule, $day, $schedule) {
        $this->idSchedule = $idSchedule;
        $this->day = $day;
        $this->schedule = $schedule;
    }

    public function getAll() {}

    public function updateSchedules() {}
}