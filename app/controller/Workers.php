<?php

class Workers extends Controller {
    public function __construct()
    {
        
    }

    public function index(){
        $this->view('workers/index');
    }

    public function edit(){
        $this->view('workers/edit');
    }
}

?>