<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
    }
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $this->template->load('template/index', 'dashboard/index', $data);
    }
}