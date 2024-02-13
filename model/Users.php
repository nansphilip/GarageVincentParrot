<?php

class User {
    public $connectStatus = false;

    public function login() {}
    
    public function sendReview() {}

    public function quoteRequest() {}

    public function quoteRequestACar() {}
}

class Employee extends User {
    public $connectStatus = true;
    public $userType = "employee";

    public $idUser;
    public $username;
    // public $password;
    
    public function logout() {}

    public function approveReview() {}

    public function sendAndApproveReview() {}
}

class Admin extends Employee {
    public $userType = "admin";
    public $email;

    public function updateServices() {}

    public function updateSchedules() {}
}