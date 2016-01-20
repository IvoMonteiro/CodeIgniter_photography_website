<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model("admin_model","model");
        
        $this->load->library('Mobile_Detect');
        
        if($this->mobile_detect->isMobile() && !$this->mobile_detect->isTablet()) {
            redirect("mobile");
        }
    }

    public function index()
    {
        $data = array();

        $data['clients'] = $this->model->get_clients();
         
        $data['folders'] = $this->model->get_thumbs();
        
        $data['downloads'] = $this->model->get_downloads();
        
        $this->load->view('partials/header',$data);
        $this->load->view('home_view',$data);
        $this->load->view('partials/footer',$data);
    }
}
