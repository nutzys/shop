<?php

class Ceos extends Controller {
    public function __construct()
    {
        
    }

    public function index(){
        $this->view('ceos/index');
    }

    public function create(){
        $this->view('ceos/create');
    }
}

?>