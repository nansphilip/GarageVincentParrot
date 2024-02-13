<?php

class QuoteRequest {
    public $idQuoteRequest;
    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $message;
    public $idCar;

    public function __construct($idQuoteRequest, $firstName, $lastName, $email, $phone, $message, $idCar) {
        $this->idQuoteRequest = $idQuoteRequest;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
        $this->idCar = $idCar;
    }

    public function sendQuoteRequest() {}
    
    private function sendEmailToAdmin() {}
}