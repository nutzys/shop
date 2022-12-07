<?php

class Workers extends Controller {
    public function __construct()
    {
        if(!isset($_SESSION['id'])){
            redirect('users/login');
        }

        $this->productModel = $this->model('Product');
    }

    public function index(){
        $data = [
            'username' => $_SESSION['username'],
            'products' => $this->productModel->all()
        ];
        $this->view('workers/index', $data);
    }

    public function update($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'id' => $id,
                'name' => $_POST['name'],
                'quantity' => $_POST['quantity'],
                'manufacturer' => $_POST['manufacturer'],
                'price' => $_POST['price'],
                'arrival_date' => $_POST['arrival-date'],
                'location' => $_POST['location'],
                'category' => $_POST['category']
            ];
            $this->productModel->update($data);
            redirect('workers/index');
        }
    }

    public function edit($id){

        $data = [
            'product' => $this->productModel->findProductById($id),
            'category' => $this->productModel->allCategory(),
            'location' => $this->productModel->allLocation()
        ];
        return $this->view('workers/edit', $data);
    }

}

?>