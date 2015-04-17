<?php

//build class for Unit helper

class TestingController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
        include 'TestFunctions.php';
    }
    
    public function index()
    {
        $this->unit->run(sum(4,3),7,"Testing the sum function");
        $this->unit->run(mul(4,5),20,"Testing the mul function");
        $this->load->view('tests');
        
    }
}