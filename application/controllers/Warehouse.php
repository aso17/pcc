<?php
class Warehouse extends CI_Controller
{
    public function index()
    {
        $this->template->load('template/index', 'warehouse/index');
    }
}