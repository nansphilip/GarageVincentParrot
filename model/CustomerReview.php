<?php

class CustomerReview {
    public $idCustomerReview;
    public $fullName;
    public $review;
    public $rating;
    public $approved;
    
    public function sendReview() {}
    
    public function approveReview() {}

    public function sendAndApproveReview() {}

    private function sendEmailToAdmin() {}
}