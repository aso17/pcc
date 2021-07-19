<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_user');
    }
    public function index()
    {
        $this->load->view('login/index');
    }

    public function store()
    {
        $post = $this->input->post();
        $username = $post['username'];
        var_dump($username);
    }
}