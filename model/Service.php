<?php

class Service {
    public $idService;
    public $name;
    public $description;
    public $price;

    public function __construct($idService, $name, $description, $price) {
        $this->idService = $idService;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public static function getAll() {
        // Gets the data from the database
        $data = Database::query("SELECT * FROM services;");
        
        $instanceList = [];
        
        // Returns a new instance of the class for each row
        foreach ($data as $value) {
            $instanceList[] = new self($value["id_service"], $value["name"], $value["description"], $value["price"]);
        }
        
        return ($instanceList);
    }

    public function updateServices() {}
}