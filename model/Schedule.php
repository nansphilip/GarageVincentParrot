<?php

class Schedule
{
    public $id;
    public $day;
    public $schedule;

    public function __construct($id = null, $day = null, $schedule = null)
    {
        $this->id = $id;
        $this->day = $day;
        $this->schedule = $schedule;
    }

    public static function updateSchedules($updateList)
    {

        foreach ($updateList as $day => $schedule) {
            $day = dbFormatString($day);
            $schedule = dbFormatString($schedule);

            $sql = 'UPDATE schedule SET schedule = :schedule WHERE day = :day';
            $bindList = [':schedule' => $schedule, ':day' => $day];

            Database::query($sql, $bindList);
        }
    }

    public static function getAll()
    {
        // Gets the data from the database
        $data = Database::query("SELECT * FROM schedule;");

        $instanceList = [];

        // Returns a new instance of the class for each row
        foreach ($data as $value) {
            $instanceList[] = new self(
                $value["id"],
                $value["day"],
                $value["schedule"]
            );
        }

        return ($instanceList);
    }
}
