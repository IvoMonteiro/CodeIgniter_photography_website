<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {

    public function __construct()
    {
         
        session_start();
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('admin_model');
    }

    public function index()
    {

        if ( isset($_SESSION['user'])) {
            $res = $this->admin_model
            ->verify_user(
                    $_SESSION['user'][0],
                    $_SESSION['user'][1]
            );
            if($res !== FALSE) {
                redirect('backend/dashboard');
            }
            return;
        }

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('passwd', 'passwd', 'required|min_length[4]');

        if ( $this->form_validation->run() !== false ) {

            $res = $this->admin_model
            ->verify_user(
                    $this->input->post('username'),
                    $this->input->post('passwd')
            );

            if ( $res !== false ) {
                $_SESSION['user'] = array($this->input->post('username'),$this->input->post('passwd'));

                redirect('backend/dashboard');
                return;
            }

        }

        $this->load->view('partials/admin_header');
        $this->load->view('login_view');
        $this->load->view('partials/admin_footer');

        return;
    }

    public function dashboard() {
        $data = array('msg' => '','upload_data' => '','path','');

        if($this->input->post('submit_clients')) {

            $res = $this->admin_model
            ->insert_client($this->input->post('client_name'));

        }
        if($this->input->post('delete_client')) {

            $res = $this->admin_model
            ->delete_client($this->input->post('delete_client'));

            if($res) {
                $data['msg'] = "Success!";
            }
        }

        if($this->input->post('submit_folders')) {

            $this->admin_model->insert_folder($this->input->post('order'));

        }

        $data['clients'] = $this->admin_model->get_clients();
        $data['folders'] = $this->admin_model->get_folders();
        $data['downloads'] = $this->admin_model->get_downloads();

        $this->load->view('partials/admin_header',$data);
        $this->load->view('backend_view',$data);
        $this->load->view('partials/admin_footer',$data);


    }

    public function logout()
    {
        session_destroy();
        redirect("/backend");
    }
}
