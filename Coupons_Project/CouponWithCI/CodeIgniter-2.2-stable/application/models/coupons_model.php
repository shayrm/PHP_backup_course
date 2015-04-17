<?php
/*
 * This is the model that control the connection to the database
 */

class coupons_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_coupons($id=FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('coupons');
            return $query->result_array();
        }
        
        $query = $this->db->get_where('coupons', array('id' => $id));
        return $query->row_array();
                 
    }
    
    public function set_coupon($formdata)
    {
        
        return $this->db->insert('coupons',$formdata);
    }        
    
}