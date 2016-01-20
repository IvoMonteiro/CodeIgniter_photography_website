<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model("admin_model","model");
    }

    public function index($cat = NULL,$folder = NULL)
    {
        if(!$cat OR !$folder)
            redirect('home');
        
        $ret = $this->model->get_photos($cat,$folder);
        $data['photos'] = $ret[0];
        $data['cat'] = $cat."/";
        $data['folder'] = $ret[1];
        
        $data['clients'] = $this->model->get_clients();
        $data['downloads'] = $this->model->get_downloads();
        
        $this->load->view('partials/photos_header',$data);
        $this->load->view('photos_view',$data);
        $this->load->view('partials/footer-photos',$data);
    }
    
}
