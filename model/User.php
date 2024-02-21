<?php

class User {

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
    
    public $id;
    public $username;
    public $email;
    public $password;

    public function __construct($id, $username, $email, $password = null) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
    
    public function approveReview() {}

    public function sendAndApproveReview() {}
}

class Admin extends Employee {

    public function updateServices() {}

    public function updateSchedules() {}

    public static function getAllEmployee() {
        $data = Database::query("SELECT * FROM user WHERE user_type = 'EMPLOYEE'");

        $instanceList = [];

        foreach ($data as $value) {
            $instanceList[] = new self(
                $value["id"],
                $value["username"],
                $value["email"]
            );
        }

        return $instanceList;
    }
}