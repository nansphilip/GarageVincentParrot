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
}

class Admin extends Employee {

    public function updateServices() {}

    public function updateSchedules() {}

    public static function addEmployee($email, $username, $password) {
        
        $email = dbFormatString($email);
        $username = dbFormatString($username);
        $password = dbFormatString($password);

        // Checks email is not already used
        $sql = 'SELECT * FROM user WHERE email = :email';
        $bindList = [':email' => $email];
        $userExists = Database::query($sql, $bindList);
        if ($userExists != null) return 'email';
        
        // Checks username is not already used
        $sql = 'SELECT * FROM user WHERE username = :username';
        $bindList = [':username' => $username];
        $userExists = Database::query($sql, $bindList);
        if ($userExists != null) return 'username';

        $password = password_hash($password, PASSWORD_DEFAULT);
        
        $sql = 'INSERT INTO user (email, username, password, user_type) VALUES (:email, :username, :password, "EMPLOYEE")';
        $bindList = [':email' => $email, ':username' => $username, ':password' => $password];

        Database::query($sql, $bindList);
        return false;
    }

    public static function getAllEmployee() {
        $data = Database::query("SELECT * FROM user WHERE user_type = 'EMPLOYEE'");

        if ($data == null) return null;
        
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