<?php

class Ceos extends Controller {
    public function __construct()
    {
        $this->productModel = $this->model('Product');
    }

    public function index(){
        $data = [
            'username' => $_SESSION['username'],
            'products' => $this->productModel->all()
        ];
        $this->view('ceos/index', $data);
    }

    public function create(){
        $this->view('ceos/create');
    }
}

?>