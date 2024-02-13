<?php

class CustomerReview {
    public $idCustomerReview;
    public $fullName;
    public $review;
    public $rating;
    public $approved;

    public function __construct($idCustomerReview, $fullName, $review, $rating, $approved) {
        $this->idCustomerReview = $idCustomerReview;
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