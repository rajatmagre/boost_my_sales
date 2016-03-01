<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
//        $this->load->model('home');
        // pagination library
        $this->load->library('pagination');
        // $this->load->helper('xcrud');
        // validation
        $this->load->library('form_validation');


        $this->load->library('email');
        $config['protocol'] = 'sendmail';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
    }

    // function _chk_if_login() {
    //     if ($this->session->userdata('login') == false || $this->session->userdata('role') != 'user') {
    //         $this->session->sess_destroy();
    //         redirect('site/login');
    //         exit();
    //     }
    // }

    public function index() {
         
        // if (isset($this->session->userdata['login'])) {
        //     redirect('site');
        // }
        if ($_POST) {

            $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|xss_clean');
            $this->form_validation->set_rules('password', 'password', 'required|xss_clean');

            if ($this->form_validation->run() == TRUE) {


                $arr = array
                    (
                    'adminemail' => $this->input->post('email', TRUE),
                    'adminpassword' => $this->input->post('password', TRUE),
                );

                $login = $this->home->getwhere('admin', $arr);

                if ($login) {

                    $session = array
                        (
                        'login' => TRUE,
                        'admin_id' => $login[0]->admin_id,
                        'role' => 'admin',
                    );
                    $this->session->set_userdata($session);
                    redirect('site');
                } else {

                    $this->session->set_flashdata('error', 'Unauthorized Access');
                    redirect('admin');
                }
            }
            $this->session->set_flashdata('error', 'Please enter a valid email and password');
            redirect('admin');
        }
        $this->load->template('admin/admin_login');
    }

    public function logoff() {
        $this->session->sess_destroy();
        redirect('admin');
        exit();
    }

}
