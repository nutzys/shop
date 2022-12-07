<?php

class Products extends Controller{
    public function __construct()
    {
        $this->productModel = $this->model('Product');
    }
    public function edit($id){
        $data = [
            'product' => $this->productModel->findProductById($id),
            'category' => $this->productModel->allLocation()
        ];
        $this->view('workers/edit', $data);
        
    }

    public function create(){
        $data = [
            'location' => $this->productModel->allLocation(),
            'category' => $this->productModel->allCategory()
        ];
        return $this->view('ceos/create', $data);
    }

    public function store(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'name' => $_POST['name'],
                'quantity' => $_POST['quantity'],
                'manufacturer' => $_POST['manufacturer'],
                'price' => $_POST['price'],
                'arrival_date' => $_POST['arrival-date'],
                'location' => $_POST['location'],
                'category' => $_POST['category']
            ];
            $this->productModel->store($data);
            return redirect('ceos/index');
        }
    }

    public function delete($id){
        $this->productModel->delete($id);
        return redirect('workers/index');
    }
}

?>