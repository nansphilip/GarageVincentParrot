<?php

class Vehicle
{
    public $id;
    public $brand;
    public $model;
    public $entryYear;
    public $mileage;
    public $price;
    public $imagePath;

    public function __construct($id = null, $brand = null, $model = null, $entryYear = null, $mileage = null, $price = null, $imagePath = null)
    {
        $this->id = $id;
        $this->brand = $brand;
        $this->model = $model;
        $this->entryYear = $entryYear;
        $this->mileage = $mileage;
        $this->price = $price;
        $this->imagePath = $imagePath;
    }

    public static function getBrandList()
    {

        // Gets the data from the database
        $data = Database::query("SELECT DISTINCT brand FROM vehicle ORDER BY brand ASC;");

        $brandList = [];

        // Returns a new instance of the class for each row
        foreach ($data as $value) {
            $brandList[] = $value["brand"];
        }

        return $brandList;
    }

    public static function getModelList()
    {

        // Gets the data from the database
        $data = Database::query("SELECT DISTINCT model FROM vehicle ORDER BY model ASC;");

        $modelList = [];

        // Returns a new instance of the class for each row
        foreach ($data as $value) {
            $modelList[] = $value["model"];
        }

        return $modelList;
    }

    public static function getBrandModelList()
    {

        // Gets the data from the database
        $data = Database::query("SELECT DISTINCT model, brand FROM vehicle;");

        $brandModelList = [];

        // Returns a new instance of the class for each row
        foreach ($data as $value) {

            if (!isset($brandModelList[$value["brand"]])) {
                $brandModelList[$value["brand"]] = [];
            }
            $brandModelList[$value["brand"]][] = $value["model"];
        }

        return $brandModelList;
    }

    public static function getMileageRange()
    {

        // Gets the data from the database
        $data = Database::query("SELECT MIN(mileage) AS min, MAX(mileage) AS max FROM vehicle;");

        return $data[0];
    }

    public static function getYearRange()
    {

        // Gets the data from the database
        $data = Database::query("SELECT MIN(entry_year) AS min, MAX(entry_year) AS max FROM vehicle;");

        return $data[0];
    }

    public static function getPriceRange()
    {

        // Gets the data from the database
        $data = Database::query("SELECT MIN(price) AS min, MAX(price) AS max FROM vehicle;");

        return $data[0];
    }

    public static function get($id)
    {

        // Gets the data from the database
        $data = Database::query("SELECT * FROM vehicle WHERE id = :id;", [":id" => $id]);

        // Returns a new instance of the class
        return $data[0];
    }

    public static function getAll()
    {

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
