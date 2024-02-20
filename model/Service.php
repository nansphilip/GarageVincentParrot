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

    public function validate()
    {
        $this->id = dbFormatInt($this->id);
        $this->name = dbFormatString($this->name);
        $this->description = dbFormatString($this->description);
        $this->price = dbFormatFloat($this->price);
    }

    public function updateServices()
    {
        // Data from a POST form
        $service = new Service();
        $service->id = $_POST["id"];
        $service->name = $_POST["name"];
        $service->description = $_POST["description"];
        $service->price = $_POST["price"];
        $service->validate();

        // Updates the data in the database
        Database::query(
            "UPDATE service SET name = :name, description = :description, price = :price WHERE id = :id;",
            [":id" => $this->id, ":name" => $this->name, ":description" => $this->description, ":price" => $this->price]
        );
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
