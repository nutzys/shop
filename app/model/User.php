<?php

class User {
    private $db;
    public function __construct(){
        $this->db = new Database();
    }

    public function checkUser($user){
        $this->db->query('SELECT * FROM users WHERE username = :username');
        $this->db->bind(':username', $user);

        if($this->db->getRows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function findUserByUsername($user){
        $this->db->query('SELECT * FROM users WHERE username = :username');
        $this->db->bind(':username', $user);
        $row = $this->db->single();
        return $row;

    }

    public function login($username, $password){
        $this->db->query('SELECT * FROM users WHERE username = :username');
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        if($password == $row->password){
            return true;
        }else{
            return false;
        }
    }
}