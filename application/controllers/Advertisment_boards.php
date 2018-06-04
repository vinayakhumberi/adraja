<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Advertisment_boards extends CI_Controller {
 
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
        $this->load->library('minify'); 
        $this->boards();
    }
    public function boards(){
        ini_set('max_execution_time', 300);
        $this->load->model('unit_model');
        log_message('Error','Data Input'.$_GET['area_id']."..".$_GET['type']);
        $area_id=$_GET['area_id'];
        $type=$_GET['type'];
        if($area_id){
            $data["advertisement_list"]=$this->unit_model->get_advertisement_list($area_id,$type);
            $this->load->view('banner_listing',$data);
        }else{
            $data['error']='city not selected or city id has not been passed to the api';
        }
    }
}
 
/* End of file Blog.php */
/* Location: ./application/controllers/blog.php */
?>