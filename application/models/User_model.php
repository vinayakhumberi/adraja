<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'/libraries/REST_Controller.php');
class User_model extends CI_Model{
 
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
    function get_user_allergies($patient_id){
        $query= $this->db->query('SELECT * FROM common_allergies WHERE patient_id='.$patient_id);
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return NULL;
        }   
    }
    function get_user_details($patient_id){
        $query=$this->db->query('SELECT * FROM patient 
            INNER JOIN common_allergies ON patient.patient_id=common_allergies.patient_id 
            INNER JOIN vital_info ON patient.patient_id=vital_info.patient_id 
            INNER JOIN reports ON patient.patient_id=reports.patient_id 
            INNER JOIN case_study_details ON patient.patient_id=case_study_details.patient_id
            WHERE patient.patient_id='.$patient_id);
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return NULL;

        }
    }
    function get_user_city($patient_id){
        $query=$this->db->query('SELECT city_name FROM patient JOIN city ON city=city_id WHERE patient_id='.$patient_id);
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return NULL;

        }
    }
    function get_doctor_details(){
        $query= $this->db->query('SELECT * FROM doctor');
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    function getNewPID(){
        $query=$this->db->query('SELECT patient_id FROM patient ORDER BY patient_id DESC LIMIT 1');
        if($query->num_rows()>0){
            $pid=$query->result();
            return $pid[0]->patient_id;
        }else{
            return NULL;
        }
    }
    function getNewAID(){
        $query=$this->db->query('SELECT allergy_id FROM common_allergies ORDER BY allergy_id DESC LIMIT 1');
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    function getNewVID(){
        $query=$this->db->query('SELECT vital_id FROM vital_info ORDER BY vital_id DESC LIMIT 1');
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    function getNewRID(){
        $query=$this->db->query('SELECT report_id FROM reports ORDER BY report_id DESC LIMIT 1');
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    function getNewPRID(){
        $query=$this->db->query('SELECT prescribe_id FROM prescription ORDER BY prescribe_id DESC LIMIT 1');
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    function getBID(){
        $query=$this->db->query('SELECT blood_id FROM blood_group ORDER BY blood_id DESC LIMIT 1');
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    function getCSID(){
        $query=$this->db->query('SELECT case_id FROM case_study_details ORDER BY case_id DESC LIMIT 1');
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return NULL;
        }   
    }
    function createUser($first_name,$last_name,$sex,$blood_group,$dob,$age,$email,$phone,$address1,$city){
        $is_deleted=0;
        $timeStamp=date('Y-m-d H:i:s');
        $created_on=$modified_on=$timeStamp;
        $created_by=$modified_by='Test';
        $active=1;
        $query=0;
        $sql = 'INSERT INTO patient (`patient_id`, `first_name`, `last_name`, `dob`, `age`, `sex`, `email`, `phone`, `employment`, `occupation`, `address1`, `address2`, `city`, `state`, `country`, `pincode`, `photo_url`, `is_deleted`, `created_on`, `created_by`, `modified_on`, `modified_by`, `active`) VALUES (NULL ,\''.$first_name.'\',\''.$last_name.'\',\''.$dob.'\',\''.$age.'\',\''.$sex.'\',\''.$email.'\',\''.$phone.'\',NULL,NULL,\''.$address1.'\',NULL,\''.$city.'\',NULL,NULL,NULL,NULL,'.$is_deleted.',\''.$created_on.'\',\''.$created_by.'\',\''.$modified_on.'\',\''.$modified_by.'\','.$active.')';
        $query=$this->db->query($sql);
        $pid=$this->getNewPID();
        // $pid=$pid[0]->patient_id;
        
        $sql='INSERT INTO common_allergies (`common_allergy_id`,`patient_id`,`is_deleted`,`created_on`,`created_by`,`modified_on`,`modified_by`,`active`)VALUES (NULL,'.$pid.','.$is_deleted.',\''.$created_on.'\',\''.$created_by.'\',\''.$modified_on.'\',\''.$modified_by.'\','.$active.')';
        $query=$this->db->query($sql);
        $sql='INSERT INTO vital_info (`vital_info_id`,`patient_id`,`is_deleted`,`created_on`,`created_by`,`modified_on`,`modified_by`,`active`)VALUES (NULL,'.$pid.','.$is_deleted.',\''.$created_on.'\',\''.$created_by.'\',\''.$modified_on.'\',\''.$modified_by.'\','.$active.')';
        $query=$this->db->query($sql);
        $sql='INSERT INTO reports (`reports_id`,`patient_id`,`is_deleted`,`created_on`,`created_by`,`modified_on`,`modified_by`,`active`)VALUES (NULL,'.$pid.','.$is_deleted.',\''.$created_on.'\',\''.$created_by.'\',\''.$modified_on.'\',\''.$modified_by.'\','.$active.')';
        $query=$this->db->query($sql);
        $sql='INSERT INTO blood_group ( `blood_group_id`,`patient_id`,`blood_group`,`location`,`is_deleted`,`created_on`,`created_by`,`modified_on`,`modified_by`,`active`)VALUES (NULL,'.$pid.',\''.$blood_group.'\',\''.$city.'\','.$is_deleted.',\''.$created_on.'\',\''.$created_by.'\',\''.$modified_on.'\',\''.$modified_by.'\','.$active.')';
        $query=$this->db->query($sql);
        $sql='INSERT INTO case_study_details (`case_id`,`patient_id`,`is_deleted`,`created_on`,`created_by`,`modified_on`,`modified_by`,`active`)VALUES (NULL,'.$pid.','.$is_deleted.',\''.$created_on.'\',\''.$created_by.'\',\''.$modified_on.'\',\''.$modified_by.'\','.$active.')';
        $query=$this->db->query($sql);
        return $query.'::'.$sql;   
    }

    function verify_hospital_user($hospital_id,$username,$password){
        $sql='SELECT * FROM hospital INNER JOIN hospital_credentials ON hospital.hospital_id=hospital_credentials.hospital_id WHERE hospital.hospital_login_name=\''.$hospital_id.'\' AND hospital_credentials.user_name=\''.$username.'\' AND hospital_credentials.password=\''.$password.'\'';
        $query=$this->db->query($sql);
        if($query->num_rows()>0){
                return true;
            }else{
                return false;
        }  
    }

    function get_hospital_patient_list($hospital_login_id){
     $sql='SELECT * FROM patient INNER JOIN hospital_patient ON patient.patient_id=hospital_patient.patient_id INNER JOIN hospital ON hospital.hospital_id=hospital_patient.hospital_id WHERE hospital.hospital_login_name=\''.$hospital_login_id.'\'';
        $query=$this->db->query($sql);
        if($query->num_rows()>0){
                return $query->result();
            }else{
                return NULL;
        }    
    }
}
?>