<?php
class Approve extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_spb');
        $this->load->model('model_spk');
        $this->load->model('model_material');
        $this->load->model('model_detail_spk');
        check_not_login();
    }
    public function index()
    {

        $this->template->load('template/index', 'approve/index');
    }
}