<?php

class Admins extends Controller {
    public function __construct()
    {
        $this->adminModel = $this->model('Admin');
    }
    
    public function index(){
        $data = [
            'users' => $this->adminModel->getUsers()
        ];
        $this->view('admins/index', $data);
    }


    public function edit($id){
        $user = $this->adminModel->getUser($id);
        $data = [
            'user' => $user,
            'roles' => $this->adminModel->getRoles()
        ];
        $this->view('admins/edit', $data);
    }

    public function store(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'role' => $_POST['role'],
                'id' => $_POST['id']
            ];
            $this->adminModel->update($data);
            redirect('admins/index');
        }
    }

}

?>