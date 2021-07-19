<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_user');
        $this->load->model('model_login');
    }
    public function index()
    {
        $this->load->view('login/index');
    }

    public function store()
    {
        $post = $this->input->post();
        $user = $this->model_login;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());
        if ($validation->run() == 0) {
            $this->load->view('login/index');
        } else {

            $username = $post['username'];
            $user = $this->model_user->getBy_username($username);

            if ($user != null) {
                $post = $this->input->post();
                $password = $post['password'];
                $pass = $user->password;

                if (password_verify($password, $pass)) {

                    $data = [
                        "id_user" => $user->id_user,
                        "nik" => $user->nikKaryawan,
                        "nama" => $user->namaLengkap,
                        "username" => $user->username,
                        "devisi" => $user->devisi,
                        "Login" => TRUE
                    ];
                    $this->session->set_userdata($data);
                    redirect('dashboard', 'refresh');
                } else {
                    $this->session->set_flashdata('error', 'Password salah!');
                    redirect('Login');
                }
            } else {
                $this->session->set_flashdata('warning', ' Belum Terdaftar');
                redirect('Login');
            }
        }
    }

    public function logout()
    {
        // 
        session_destroy();
        redirect('Login');
    }
}