<?php

class Service
{
    public $id;
    public $name;
    public $description;
    public $price;

    public function __construct($id = null, $name = null, $description = null, $price = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public static function addServices($name, $description, $price)
    {
        // Data from a POST form
        $name = dbFormatString($name);
        $description = dbFormatString($description);
        $price = dbFormatInt($price);

        $sql = 'INSERT INTO service (name, description, price) VALUES (:name, :description, :price)';
        $bindList = [':name' => $name, ':description' => $description, ':price' => $price];

        Database::query($sql, $bindList);
    }

    public static function getAll()
    {
        // Gets the data from the database
        $data = Database::query("SELECT * FROM service ORDER BY name ASC;");

        $instanceList = [];

        // Returns a new instance of the class for each row
        foreach ($data as $value) {
            $instanceList[] = new self(
                $value["id"],
                $value["name"],
                $value["description"],
                $value["price"]
            );
        }

        return ($instanceList);
    }
}
