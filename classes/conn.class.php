<?php

class Conn {
    public function connection() {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=loginsystemoop", 'root', '');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $th) {
            echo "Connection failed: " .  $th->getMessage();
        }
    }
}

// ,PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC