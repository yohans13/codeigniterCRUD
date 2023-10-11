<?php 
Class Crud extends CI_Controller{

    function index(){
         
        $this->load->view('viewall');
    }


    function create(){
        $this->load->view('create');

    }

    function edit(){
        $this->load->view('edit');

    }

    function delete(){
        $this->load->view();

    }

}

?>