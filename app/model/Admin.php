<?php

class Admin{
    private $db;
    public function __construct(){
        $this->db = new Database();
    }

    public function getUsers(){
        $this->db->query('SELECT u.id, u.username, u.password, u.date_joined , r.name FROM users AS u INNER JOIN roles AS r ON u.role_id = r.id');
        $rows = $this->db->returnAll();

        return $rows;
    }

    public function getRoles(){
        $this->db->query('SELECT * FROM roles');
        $rows = $this->db->returnAll();

        return $rows;
    }

    public function getUser($id){
        $this->db->query('SELECT * FROM users WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();

        return $row;
    }

    public function update($data){
        $this->db->query('UPDATE users SET username = :username, password = :password, role_id = :role_id WHERE id = :id');
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':role_id', $data['role']);
        $this->db->bind(':id', $data['id']);
        $this->db->execute();
    }
}