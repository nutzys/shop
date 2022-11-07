<?php

class Admins extends Controller {
    public function __construct()
    {
        
    }
    
    public function index(){
        $this->view('admins/index');
    }

    public function create(){
        $this->view('admins/create');
    }

    public function edit(){
        $this->view('admins/edit');
    }
}

?>