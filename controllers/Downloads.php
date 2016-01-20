<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Downloads extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model("admin_model","model");
    }

    public function index()
    {
        
        $data['downloads'] = $this->model->get_downloads();
        $this->load->view('partials/header');
        $this->load->view('fe_downloads_view',$data);
        $this->load->view('partials/footer');
    }
    
}
