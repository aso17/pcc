<?php
class Planing extends CI_Controller
{
    public function index()
    {
        $this->template->load('template/index', 'planing/index');
    }
}