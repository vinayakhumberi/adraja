<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends CI_Controller {
 
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
        // $this->load->view('welcome_message');
        $this->load->library('minify'); 
        $this->home_controller();
        $page_name=$this->uri->segment(1);

    }
    public function home_controller(){
        // $this->load->model('home_model');
        // $data['city']=$this->home_model->get_city_details();
        $this->load->view('banner_home');
    }
    public function contact_us_controller(){
        $this->load->view('contact_us');
    }
}
 
/* End of file Blog.php */
/* Location: ./application/controllers/blog.php */
?>