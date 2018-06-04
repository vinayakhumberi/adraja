<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Unit_model extends CI_Model{
 
    function __construct(){
    	parent::__construct();
    }
    function get_user_basic_info($patient_id){
        $query= $this->db->query('SELECT * FROM patient WHERE patient_id='.$patient_id);
        if($query->num_rows()>0){
        	return $query->result();
        }else{
        	return NULL;
        }
    }
    function get_advertisement_list($area_id,$type){
        switch ($type) {
            case 'billboard':
                return $this->get_billboard_list($area_id);
            break;
            case 'designer':
                return $this->get_designer_list($area_id);
            break;
            case 'printer':
                return $this->get_printer_list($area_id);
            break;            
            default:
                return $this->get_billboard_list($area_id);
            break;
        }
    }

    function get_billboard_list($area_id){
        $query='SELECT bill_id,bill_name,bill_address,bill_description,bill_owner_user_id,dimensions,direction,lighting,price FROM billboards WHERE area_id='.$area_id.' AND is_deleted =0';
        $output= $this->db->query($query);


        foreach ($output->result() as $key => $res) {
            $query='SELECT picture_link FROM pictures WHERE bill_id='.$res->bill_id;
            $images=$this->db->query($query)->result_array();
            foreach ($images as $key => $img) {
                $res_img[$key]=$img["picture_link"];
            }
            $res->images=$res_img;
        }


        if($output->num_rows()>0){
            return $output->result_array();
        }else{
            return NULL;
        }
    }
    function get_designer_list($area_id){
        $query= 'SELECT design.designer_id,design.designer_name,design.designer_description,design.designer_user_id as user_id,design.designer_link  FROM  designer design WHERE design.area_id='.$area_id.' AND is_deleted =0';
        $output= $this->db->query($query);
        foreach ($output->result() as $key => $res) {
            $res->designer_link=explode(",",$res->designer_link);
            $res->happy_customers=30;
            $res->avg_time=10;
            $res->price=1000;
            $res->images=array(base_url()."/assets/img/bill-1.jpg", base_url()."/assets/img/bill-2.jpg", base_url()."/assets/img/bill-3.jpg");
        }


        if($output->num_rows()>0){
            return $output->result_array();
        }else{
            return NULL;
        }
    }
    function get_printer_list(){
        return 'printer';
    }
}
?>