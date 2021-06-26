<?php
class Warehouse extends CI_Controller
{
    public function index()
    {
        $this->template->load('template/index', 'warehouse/index');
    }

    public function material()
    {
        $this->template->load('template/index', 'warehouse/material/index');
    }
    public function approve()
    {
        $this->template->load('template/index', 'warehouse/spb');
    }
}