<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $this->template->load('template/index', 'dashboard/index', $data);
    }
}