<?php

class CustomerReview {
    public $id;
    public $fullName;
    public $review;
    public $rating;
    public $approved;

    public function __construct($id, $fullName, $review, $rating, $approved) {
        $this->id = $id;
        $this->fullName = $fullName;
        $this->review = $review;
        $this->rating = $rating;
        $this->approved = $approved;
    }
    
    public function sendReview() {}
    
    public function approveReview() {}

    public function sendAndApproveReview() {}

    private function sendEmailToAdmin() {}

    public static function getAllApproved() {

        // Gets the data from the database
        $data = Database::query("SELECT * FROM customer_review WHERE approved = 1;");

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