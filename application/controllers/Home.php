<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Comp_part');
        $this->load->model('User');
        date_default_timezone_set("Asia/Bangkok");
    }
    
    public function index()
    {

        $this->load->view('css');
        $data = array();
        $this->load->view('Home', $data);
        $this->load->view('js');
    }

    public function get_data_search_error()
    {
        $data = $this->Comp_part->get_data_search_error();
        print_r(json_encode($data));
    }
}
