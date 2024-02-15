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
}