<?php
require 'Database.php';

Trait Model
{
    use Database;

    //all the things that relate to query shit



    //validate things
    public function validateLogIn($username, $password){
        $hashPassword = hash('sha256', $password);
        $query = 'SELECT * FROM users WHERE username = :username AND pass = :password';
        $result = $this->query($query, ['username' => $username, 'password' => $hashPassword]);
        return isset($result[0]) ? $result[0] : null; // Return only the first row or null if no match
    }
    public function validateUsername($username){
        $query = 'SELECT * FROM users WHERE username = :username';
        $result = $this->query($query, ['username' => $username]);
        return isset($result[0]) ? $result[0] : null;
    }


    //get Users stuff
    public function getAllUsers($username){
        $query = "SELECT s.username, s.role, s.state, i.contact, i.name, i.user_profile FROM users s INNER JOIN user_personal_info i ON s.user_id = i.user_id WHERE s.username !="."'$username'";
        return $this->query($query); // Returns an array of all users
    }
    public function getUserID($username){
        $query = 'SELECT user_id FROM users WHERE username = :username';
        $result = $this->query($query, ['username' => $username]);
        return isset($result[0]) ? $result[0]: null;
    }
    public function getUserInfo($id){
        $query = 'SELECT * FROM user_personal_info  WHERE user_id = :id';
        $result = $this->query($query, ['id' => $id]);
        return isset($result[0]) ? $result[0] : null;
    }
    public function getUser($id){
        $query = 'SELECT * FROM users  WHERE user_id = :id';
        $result = $this->query($query, ['id' => $id]);
        return isset($result[0]) ? $result[0] : null;
    }





    //insert user
    public function insertUserInfo($id,$fullName, $sex, $birthdate,$contactNumber, $image){
        $query = 'INSERT INTO user_personal_info VALUES(:user_id, :name, :sex, :birth_date, :contact, :user_profile)';
        $result = $this->query($query, ['user_id' => $id, 'name' => $fullName, 'sex'=>$sex, 'birth_date'=>$birthdate, 'contact'=>$contactNumber, 'user_profile'=>$image]);
        return isset($result[0]) ? $result[0] : null;
    }
    public function insertUser($username, $password,$role){
        $hashPassword = hash('sha256', $password);
        $query = 'INSERT INTO users (username, pass, role) VALUES (:username, :pass, :role)';
        $result = $this->query($query, ['username' => $username, 'pass' => $hashPassword, 'role' => $role]);
        return isset($result[0]) ? $result[0] : null;
    }


}