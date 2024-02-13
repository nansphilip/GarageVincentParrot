<?php

class Database
{
    private static $pdo;

    private static function init() {
        // TODO: connect to database from the credentials in `config.ini`
        $database_dsn = 'mysql:host=localhost;dbname=ultra-motor-db';
        $database_user = 'ultra-motor-user';
        $database_password = 'ultra-motor-password';

        self::$pdo = new PDO($database_dsn, $database_user, $database_password);
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function query($sql, $bindList = []) {

        // If first time
        if (!self::$pdo) {
            self::init();
        }

        $stmt = self::$pdo->prepare($sql);

        // Bind values if needed
        if ($bindList != null) {
            foreach ($bindList as $key => $value) {
                $stmt->bindValue($key, $value);
            }
        }
        
        $stmt->execute();

        $data = [];

        // Stores the data in an associative array
        if ($stmt->rowCount() > 0) {
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return $data;
    }
}
