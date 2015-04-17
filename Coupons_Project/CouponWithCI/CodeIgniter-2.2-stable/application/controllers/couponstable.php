<?php
class couponstable extends CI_Controller
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
            'queries' => TRUE,
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
    
    public function indexTable()
    {
        //listing all coupons from the coupons table in coupon_db DB
        $data['coupons']=$this->coupons_model->get_coupons();
        $data['title']='Coupon List';
        $data['browser']=$this->agent->browser();
        
        //load the table libery
        $this->load->library('table');
        
        //config the img for img libery
        $config['image_library'] = 'gd2';
        //$config['source_image']	= '/path/to/image/mypic.jpg';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width']	= 75;
        $config['height']	= 50;
        
        $data['img']=$this->load->library('image_lib',$config);
        //$data['table']->table->set_caption('list of coupons');
        
        //executing cache for the page
        $this->output->cache(2);
        
        $this->load->view('templates/header', $data);
        $this->load->view('couponstable/indexTable', $data);
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
    
    public function createCoupon ()
    {
        // loading the "form" helper and validation
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        //load the upload class for uploading and files managment
        // THIS IS NOT WORKING ---> PLEASE FIX THE UPLOADING FILE
        //$this->load->library('upload');
        $this->load->helper('url');
           
        
        $data['title']='Create new Coupon';
        $data['browser']=$this->agent->browser();
        
        $this->form_validation->set_rules('couponName','CouponName','required');
        $this->form_validation->set_rules('couponDesc','CouponDesc','required');
        
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);   
            $this->load->view('couponsforms/createCoupon');
            $this->load->view('templates/footer');
        
        }
        else
        {
            $data['browser']=$this->agent->browser();
            $data['title']='Create New Coupon';
            
            $this->load->view('templates/header', $data);
            
            $config['upload_path'] = '../../upload_Coupons/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100000';
            $config['max_width'] = '2024';
            $config['max_height'] = '1468';
            
            $this->load->library('upload');
            $this->upload->initialize($config);
            
            if ( ! $this->upload->do_upload('userfile'))
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('templates/errorPage', $error);
                echo base_url();
                
            }
            else
            {
              
             $data['fileInfo'] = array('upload_data' => $this->upload->data('userfile'));
            
            
            //get the input from the form
            $formdata = array(
                'category_id'   => $this->input->post('couponCategory',TRUE),
                'business_id'   => $this->input->post('businessID',TRUE),
                'name'          => $this->input->post('couponName',TRUE),
                'description'   => $this->input->post('couponDesc',TRUE),
                'imagefilename' => $data['fileInfo']['upload_data']['file_name'],
            );
            
            
            $this->coupons_model->set_coupon($formdata);
            $this->load->view('couponsforms/success',$data);
            $this->load->view('templates/footer');
            }
        
    }
   }
}