<?php

class QuoteRequest {
    public $idQuoteRequest;
    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $message;
    public $idCar;

    public function sendQuoteRequest() {}
    
    private function sendEmailToAdmin() {}
}