<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site extends CI_Controller {

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
        
        $this->load->template('site');
    }

    public function register() {
        if ($_POST) {

            $this->form_validation->set_rules('firstname', 'first name', 'required|xss_clean');
            $this->form_validation->set_rules('lastname', 'last Name', 'required|xss_clean');
//            $this->form_validation->set_rules('city', 'city', 'required|xss_clean');
            if ($this->form_validation->run() == TRUE) {
                

                    //insert
                    $customer_insert_data = array(
                        'first_name' => $_POST['firstname'],
                        'last_name' => $_POST['lastname'],
                        'email' => $_POST['email'],
                        'phone_number' => $_POST['contact_no'],
                        'website_url' => $_POST['website_url'],
                        'job_title' => $_POST['job_title'],
                        'requirements' => $_POST['requirement'],
                        'registered_at' => time(),
                    );
                    $this->home->insert_data('customer', $customer_insert_data);

                    redirect('site');
                    
            }else {
                $this->session->set_flashdata('error', 'Please enter a valid details');
                redirect('site/register');
            }
        }

        $this->load->template('register');
    }

    public function contact_us() {
        if ($_POST) {

            $this->form_validation->set_rules('firstname', 'first name', 'required|xss_clean');
            $this->form_validation->set_rules('lastname', 'last Name', 'required|xss_clean');
            $this->form_validation->set_rules('email', 'E-mail', 'required|xss_clean');
//            $this->form_validation->set_rules('city', 'city', 'required|xss_clean');
            if ($this->form_validation->run() == TRUE) {
                

                    //insert
                    $contact_insert_data = array(
                        'first_name' => $_POST['firstname'],
                        'last_name' => $_POST['lastname'],
                        'email' => $_POST['email'],
                        'contact_number' => $_POST['contact_no'],
                        'website_url' => $_POST['website_url'],
                        'company_name' => $_POST['company_name'],
                        'skype_mail' => $_POST['skype_mail'],
                        'requirements' => $_POST['requirement'],
                        'registered_at' => time(),
                    );
                    $this->home->insert_data('contact_us_detail', $contact_insert_data);

                    redirect('site');
                    
            }else {
                $this->session->set_flashdata('error', 'Please enter a valid details');

                redirect('site/contact_us');
            }
        }

        $this->load->template('contact_us');
    }

}
