<?php

class Database {
    private static $pdo;

    private static function init() {
        // TODO: connect to database from the credentials in `config.ini`
        self::$pdo = new PDO();
        self::$pdo->connect(SERVER_URL, USERNAME, PASSWORD);
    }

    public static function query($sql) {

        // First time
        if (!self::$pdo) {
            self::$pdo::init();
        }

        self::$pdo->prepare($sql);
        self::$pdo->execute();

        $data = [];

        foreach (self::$pdo->fetchAll() as $row) {
            $data[] = $row->fetch();
        }

        return $data;
    }
}
