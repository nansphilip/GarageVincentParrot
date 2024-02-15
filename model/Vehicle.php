<?php

class Vehicle {
    public $id;
    public $brand;
    public $model;
    public $entryYear;
    public $mileage;
    public $price;
    public $imagePath;

    public function __construct($id = null, $brand = null, $model = null, $entryYear = null, $mileage = null, $price = null, $imagePath = null) {
        $this->id = $id;
        $this->brand = $brand;
        $this->model = $model;
        $this->entryYear = $entryYear;
        $this->mileage = $mileage;
        $this->price = $price;
        $this->imagePath = $imagePath;
    }

    public function validate() {
        $this->id = dbFormatInt($this->id);
        $this->brand = dbFormatString($this->brand);
        $this->model = dbFormatString($this->model);
        $this->entryYear = dbFormatInt($this->entryYear);
        $this->mileage = dbFormatInt($this->mileage);
        $this->price = dbFormatFloat($this->price);
        $this->imagePath = dbFormatString($this->imagePath);
    }

    public static function get($id) {

        // Gets the data from the database
        $data = Database::query("SELECT * FROM vehicle WHERE id_vehicle = :idVehicle;", [":idVehicle" => $id]);

        $vehicle = new Vehicle();
        $vehicle->id = $data["id"];
        $vehicle->brand = $data["brand"];
        $vehicle->model = $data["model"];
        $vehicle->entryYear = $data["entryYear"];
        $vehicle->mileage = $data["mileage"];
        $vehicle->price = $data["price"];
        $vehicle->imagePath = $data["imagePath"];
        $vehicle->validate();

        // Returns a new instance of the class
        return $vehicle;
    }

    public static function getAll() {

        // Gets the data from the database
        $data = Database::query("SELECT * FROM vehicle;");

        $instanceList = [];

        // Returns a new instance of the class for each row
        foreach ($data as $value) {
            $instanceList[] = new self(
                $value["id"],
                $value["brand"],
                $value["model"],
                $value["entry_year"],
                $value["mileage"],
                $value["price"],
                $value["imagePath"]
            );
        }

        return $instanceList;
    }
}
