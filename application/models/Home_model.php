<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model{
 
    function __construct(){
    	parent::__construct();
    }
    function get_city_details(){
        $query= $this->db->query('SELECT city_id,city_name FROM city');
        if($query->num_rows()>0){
        	return $query->result();
        }else{
        	return NULL;
        }
    }
    function get_area_details($city_id,$typo){
     $query= $this->db->query('SELECT area_id,area_name,latitude,longitude FROM area WHERE city_id='.$city_id.' AND area_name LIKE \'%'.$typo.'%\' ORDER BY area_name');
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return NULL;
        }   
    }
    function get_filter_details(){
        $query= $this->db->query('SELECT category_id,category_name FROM f_category');
        if($query->num_rows()>0){
            $output["category"]=$query->result();
        }   
        $query= $this->db->query('SELECT lighting_id,lighting_name FROM f_lighting');
        if($query->num_rows()>0){
            $output["lighting"]=$query->result();
        }
        if($output){
            return $output;
        }else{
            return NULL;
        }
    }
}
?>