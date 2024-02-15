<?php

class QuoteRequest {
    public $id;
    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $message;
    public $idVehicle;

    public function __construct($id, $firstName, $lastName, $email, $phone, $message, $idVehicle) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
        $this->idVehicle = $idVehicle;
    }

    public function sendQuoteRequest() {}
    
    private function sendEmailToAdmin() {}
}