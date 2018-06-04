<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Api extends CI_Controller {
 
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/blog
     *  - or -  
     *      http://example.com/index.php/blog/index
     *  - or -  
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/blog/{method_name}
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
    }
    public function getCities(){
        $this->load->model('home_model');
        $data['city']=$this->home_model->get_city_details();
        header('Content-Type: application/json');
        echo json_encode( $data );
    }
    public function getArea(){
        $this->load->model('home_model');
        $city_id=$_GET['city_id'];
        $typo=$_GET['typo'];
        if($city_id){
            $data['area']=$this->home_model->get_area_details($city_id,$typo);
            if(!$data['area']){
                $data['message']='No areas found for this city';
            }
        }else{
            $data['error']='city not selected or city id has not been passed to the api';
        }
        header('Content-Type: application/json');
        echo json_encode( $data );
    }
    /**
    * @author: vhumberi
    * @param: area_id , type{billboard,designer,printer}
    */
    public function getAdvertisementList(){
        $this->load->model('unit_model');
        $area_id=$_GET['area_id'];
        $type=$_GET['type'];
        if($area_id){
            $data=$this->unit_model->get_advertisement_list($area_id,$type);
            if(isset($_GET['ajax_mode'])){
                $html='';
                foreach ($data as $key => $ads){ 
                    $temp=$ads;
                    $ads='';
                    $ads["ads"]=$temp;
                    $ads["key"]=$key;
                    $ads["ads"]["type"]=(isset($_GET['type'])?$_GET['type']:'billboard');
                    $html[$key]=$this->load->view('banner_card',$ads, true);       
                }
                $data='';
                $data=$html;
            }else{
                $data=$this->unit_model->get_advertisement_list($area_id,$type);
                header('Content-Type: application/json');
            }
        }else{
            $data['error']='city not selected or city id has not been passed to the api';
        }
        echo json_encode( $data );
    }
}
 
/* End of file Blog.php */
/* Location: ./application/controllers/blog.php */
?>