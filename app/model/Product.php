<?php

class Product{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function all(){
        $this->db->query('SELECT p.id, p.name, p.quantity, p.manufacturer, p.price, p.arrival_date, l.location, c.category FROM products AS p INNER JOIN location AS l ON p.prod_loc_id = l.id LEFT JOIN category AS c ON p.category_id = c.id ORDER BY p.id');
        $rows = $this->db->returnAll();
        return $rows;
    }

    public function findProductById($id){
        $this->db->query('SELECT * FROM products WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }

    public function allLocation(){
        $this->db->query('SELECT * FROM location');
        $rows = $this->db->returnAll();
        return $rows;
    }

    public function allCategory(){
        $this->db->query('SELECT * FROM category');
        $rows = $this->db->returnAll();
        return $rows;
    }

    public function update($data){
        $this->db->query('UPDATE products SET name = :name, quantity = :quantity, manufacturer = :manufacturer, price = :price, arrival_date = :arrival_date, prod_loc_id = :location, category_id = :category WHERE id = :id');
        $this->db->bind('id', $data['id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind('quantity', $data['quantity']);
        $this->db->bind(':manufacturer', $data['manufacturer']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind('arrival_date', $data['arrival_date']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':category', $data['category']);
        $this->db->execute();
    }

    public function store($data){
        $this->db->query('INSERT INTO products (name, quantity, manufacturer, price, arrival_date, prod_loc_id, category_id) VALUES (:name, :quantity, :manufacturer, :price, :arrival_date, :location, :category)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind('quantity', $data['quantity']);
        $this->db->bind(':manufacturer', $data['manufacturer']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind('arrival_date', $data['arrival_date']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':category', $data['category']);
        $this->db->execute();
    }

    public function delete($id){
        $this->db->query('DELETE FROM products WHERE id = :id');
        $this->db->bind(':id', $id); 
        $this->db->execute();
    }
}

?>