<?php

class Vehicle {
    public $id;
    public $registration;
    public $mileage;
    public $brand;
    public $model;
    public $version;

    public function __construct($id, $brand, $registration) {
        $this->id = $id;
        $this->brand = $brand;
        $this->registration = $registration;
    }

    public function changeBrand($brand) {
        $this->brand = $brand;
    }

    public static function get($id) {
        return self::getAll($id)[0];
    }

    public static function getAll($id = null) {

        if ($id) {
            $condition = "WHERE id = $id";
        } else {
            $condition = "";
        }

        $data = Database::query("SELECT * FROM vehicle $condition");

        $instanceList = [];

        foreach ($data as $value) {
            $instanceList[] = new self($value["id"], $value["brand"], $value["registration"]);
        }

        return $instanceList;
    }

    public function insert() {
        $insertedId = Database::query("INSERT INTO vehicle () VALUES ()");
    }

    public function update($id) {
        Database::query("UPDATE vehicle SET WHERE id = $id");
    }

    // public static function delete() {
        
    // }
}
