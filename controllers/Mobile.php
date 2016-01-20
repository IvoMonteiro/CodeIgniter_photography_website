<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model("admin_model","model");
    }

    public function index()
    {
        $data = array();

        $data['clients'] = $this->model->get_clients();
         
        $data['folders'] = $this->model->get_thumbs();
        
        $data['downloads'] = $this->model->get_downloads();
        
        //         var_dump($data['folders']);exit;
        $this->load->view('partials/mobile_header',$data);
        $this->load->view('mobile_view',$data);
        $this->load->view('partials/footer-mobile',$data);
    }
}
