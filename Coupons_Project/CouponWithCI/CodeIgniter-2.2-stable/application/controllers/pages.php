<?php
/*
 * This is the coltorler for the static pages, like Home page and about
 * it will use the function view to present the content of /views/pages/ dir
 * static HTML files could be added to this location.
 */
class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //loading the coupons_model.php file from the models dir
        $this->load->model('coupons_model');
    
        //add the user agent lib
        $this->load->library('user_agent');
    
        //enabling the Porfiler
        $this->output->enable_profiler(TRUE);
        $sections = array(
            'config' => FALSE,
            'queries' => FALSE,
            'post' => FALSE,
            'memory_usage' => TRUE,
            'queries' => TRUE,
            'get' => FALSE,
            'benchmarks' => TRUE,
            'controller_info' => FALSE,
            'url_string' => TRUE,
        );
        $this->output->set_profiler_sections($sections);
    
    }
    
    public function view($page='home')
    {
        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
        //configur the calander and load the 'calander' library
        $calnderConf= array ('day_type'=> 'short', 'month_type'=>'long');
        $this->load->library('calendar', $calnderConf);
        
        $data['cal']=array(
            4=> 'http://abc.com/?id=123',
            18=> 'http://abc.com/?id=123');
            
        
        
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['browser']=$this->agent->browser();
        
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/simplecalander',$data);
        $this->load->view('templates/footer', $data);
    }
}