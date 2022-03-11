<?php
    
class User extends Conn{
    //users table
    protected function createUser($firstName, $lastName, $email, $user, $pass, $dob) {
        $sql = "INSERT INTO Users (first_name, last_name, email, user_name, password, date_of_birth) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $email, $user, $pass, $dob]);
    }

    protected function checkUser($user, $password) {
        $sql = "SELECT * FROM Users WHERE user_name = ? and password = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$user, $password]);
        $details = $stmt->fetchAll();
        // return $details[0]['first_name'] .'<br>' . $details[0]['last_name'] . '<br>' . $details[0]['email'] .'<br>' . $details[0]['user_name'] . '<br>' . $details[0]['pass'] . '<br>' . $details[0]['dob'];
        
        $users = $stmt->rowCount();

        return $users;
    }

    protected function updateUser($firstName, $lastName, $email, $user, $pass, $dob) {
        $sql = "UPDATE Users WHERE user_name = $user SET first_name = ? OR last_name = ? OR email = ? OR user_name = ? OR password = ? OR date_of_birth = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $email, $user, $pass, $dob]);
        $details = $stmt->fetchAll();
    }

    public function createdUser($username) {
        $sql = "SELECT user_name FROM users WHERE user_name = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$username]);
        $Names = $stmt->rowCount();

        return $Names;
    }
}

