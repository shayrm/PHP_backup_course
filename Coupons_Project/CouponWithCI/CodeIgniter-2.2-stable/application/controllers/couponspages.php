<?php
class couponspages extends CI_Controller
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
    
    public function index()
    {
        //listing all coupons from the coupons table in coupon_db DB
        $data['coupons']=$this->coupons_model->get_coupons();
        $data['title']='Coupon List';
        $data['browser']=$this->agent->browser();
        
        
        $this->load->view('templates/header', $data);
        $this->load->view('couponspages/index', $data);
        $this->load->view('templates/footer');
        
        
    }
    
    public function getCoupon($id)
    {
        //calling for a specific ID from the coupons table
        $data['one_coupon']=$this->coupons_model->get_coupons($id);
                      
        if (empty($data['one_coupon']))
        {
            echo "data is empty";
            show_404();
        }
        
        $data['title'] = $data['one_coupon']['name'];
        $data['browser']=$this->agent->browser();
        
        $this->load->view('templates/header', $data);
        $this->load->view('couponspages/getCoupon', $data);
        $this->load->view('templates/footer');
        
    }
}