<?php

class Vehicle {
    public $idVehicle;
    public $brand;
    public $model;
    public $entryYear;
    public $mileage;
    public $price;
    public $imagePath;

    public function __construct($idVehicle, $brand, $model, $entryYear, $mileage, $price, $imagePath) {
        $this->idVehicle = $idVehicle;
        $this->brand = $brand;
        $this->model = $model;
        $this->entryYear = $entryYear;
        $this->mileage = $mileage;
        $this->price = $price;
        $this->imagePath = $imagePath;
    }

    public static function get($idVehicle) {
        // Gets the data from the database
        $data = Database::query("SELECT * FROM vehicles WHERE id_vehicle = :idVehicle;", [":idVehicle" => $idVehicle]);

        // Returns a new instance of the class
        return new self($data["idVehicle"], $data["brand"], $data["model"], $data["entryYear"], $data["mileage"], $data["price"], $data["imagePath"]);
    }

    public static function getAll() {
        // Gets the data from the database
        $data = Database::query("SELECT * FROM vehicle;");

        $instanceList = [];

        // Returns a new instance of the class for each row
        foreach ($data as $value) {
            $instanceList[] = new self($value["idVehicle"], $value["brand"], $value["model"], $value["entryYear"], $value["mileage"], $value["price"], $value["imagePath"]);
        }

        return $instanceList;
    }
}
