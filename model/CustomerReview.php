<?php

class CustomerReview
{
    public $id;
    public $fullName;
    public $review;
    public $rating;
    public $approved;

    public function __construct($id, $fullName, $review, $rating, $approved)
    {
        $this->id = $id;
        $this->fullName = $fullName;
        $this->review = $review;
        $this->rating = $rating;
        $this->approved = $approved;
    }

    public function validate()
    {
        $this->id = dbFormatInt($this->id);
        $this->fullName = dbFormatString($this->fullName);
        $this->review = dbFormatString($this->review);
        $this->rating = dbFormatInt($this->rating);
        $this->approved = dbFormatInt($this->approved);
    }

    public function sendReview()
    {
        $this->validate();

        $sql = "INSERT INTO customer_review (full_name, review, rating, approved) VALUES (:full_name, :review, :rating, :approved)";
        $bindValues = [':full_name' => $this->fullName, ':review' => $this->review, ':rating' => $this->rating, ':approved' => 'PENDING'];

        Database::query($sql, $bindValues);
    }

    public function sendAndApproveReview()
    {
        $this->validate();

        $sql = "INSERT INTO customer_review (full_name, review, rating, approved) VALUES (:full_name, :review, :rating, :approved)";
        $bindValues = [':full_name' => $this->fullName, ':review' => $this->review, ':rating' => $this->rating, ':approved' => 'APPROVED'];

        Database::query($sql, $bindValues);
    }

    public static function getAllPending()
    {

        // Gets the data from the database
        $data = Database::query("SELECT * FROM customer_review WHERE approved = 'PENDING' ORDER BY id DESC;");

        if (isset($data)) {
            $instanceList = [];

            // Returns a new instance of the class for each row
            foreach ($data as $value) {
                $instanceList[] = new self(
                    $value["id"],
                    $value["full_name"],
                    $value["review"],
                    $value["rating"],
                    $value["approved"],
                );
            }

            return $instanceList;
        } else {
            return null;
        }
    }

    public static function getAllApproved()
    {

        // Gets the data from the database
        $data = Database::query("SELECT * FROM customer_review WHERE approved = 'APPROVED' ORDER BY id DESC;");

        $instanceList = [];

        // Returns a new instance of the class for each row
        foreach ($data as $value) {
            $instanceList[] = new self(
                $value["id"],
                $value["full_name"],
                $value["review"],
                $value["rating"],
                $value["approved"],
            );
        }

        return $instanceList;
    }
}
