<?php

//the controller class could be found in system/core/Controller.php
class Pages extends CI_Controller {
    
    
    public function view($page = 'home')
    {
    if (!file_exists(APPPATH.'/views/pages/'.$page.'.php'))
    {
        // Whoops, we don't have a page for that!
        show_404();
    }
    $data['title'] = ucfirst($page); // Capitalize the first letter
    $data['company']='My own Company.com';
    $data['year']='2015';
    
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);
    }
}

?>