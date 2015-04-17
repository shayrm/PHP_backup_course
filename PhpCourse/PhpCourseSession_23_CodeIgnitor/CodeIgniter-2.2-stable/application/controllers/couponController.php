<?php
class SimpleController extends CI_Controller {
    public function getCoupons()
    {
        if ( !file_exists('application/views/pages/'.$pagename.'.php'))
        {
            show_404();
        }
        $data['____'] = ________;
        $data['year'] = 2014;
        $data['company'] = 'life michael';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$pagename, $data);
        $this->load->view('templates/footer', $data);
    }
}
?>