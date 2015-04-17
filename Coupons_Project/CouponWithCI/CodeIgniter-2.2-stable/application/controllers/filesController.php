<?php


// testing the file helper
class filesController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('file');
    }
        public function index()
        {
            $this->load->view('pages/filesDemo');
        }
}