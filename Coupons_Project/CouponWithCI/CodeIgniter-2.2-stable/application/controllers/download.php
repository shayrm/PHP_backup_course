<?php

//download colnteroller for Zip helper

class download extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('zip');
    }
    
    public function index()
    {
        $this->load->view('pages/zipsample');
    }
} 

?>