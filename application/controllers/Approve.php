<?php
class Approve extends CI_Controller
{
    public function index()
    {

        $this->template->load('template/index', 'approve/index');
    }
}