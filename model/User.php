<?php

class User {
    public $connectStatus = false;

    public static function login($username, $password) {

        $user = Database::query("SELECT * FROM user WHERE username = :username", [':username' => $username]);

        // User exists and password is correct
        if (isset($user) && password_verify($password, $user[0]['password'])) {

            $_SESSION['connected'] = true;
            $_SESSION['userType'] = $user[0]["user_type"];
            
            return true;
        } else {
            return false;
        }
    }
    
    public function sendReview() {}

    public function quoteRequest() {}

    public function quoteRequestACar() {}
}

class Employee extends User {
    public $connectStatus = true;
    public $userType = "employee";

    public $id;
    public $username;
    // public $password;
    
    public function approveReview() {}

    public function sendAndApproveReview() {}
}

class Admin extends Employee {
    public $userType = "admin";
    public $email;

    public function updateServices() {}

    public function updateSchedules() {}
}