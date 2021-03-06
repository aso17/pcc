<?php
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_user');
        check_not_login();
    }
    public function index()
    {
        $data['users'] = $this->model_user->GetAll();
        $this->template->load('template/index', 'user/index', $data);
    }
    public function create()
    {
        $this->template->load('template/index', 'user/create');
    }
    public function store()
    {
        $post = $this->input->post();
        $user = $this->model_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());
        if ($validation->run() == 0) {
            $this->template->load('template/index', 'user/create');
        } else {

            $post = $this->input->post();
            $this->model_user->insert($post);
            $this->session->set_flashdata('success', 'Data User telah ditambahakan');
            redirect('Users', 'refresh');
        }
    }

    public function edit($id_user)
    {
        $data['user'] = $this->model_user->getBy_id($id_user);
        $this->template->load('template/index', 'user/edit', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->model_user->update($post);

        $this->session->set_flashdata('info', 'Data User telah diubah');
        redirect('Users', 'refresh');
    }

    public function delete($id_user)
    {
        $this->model_user->delete($id_user);
        $this->session->set_flashdata('info', 'Data User telah dihapus');
        redirect('Users', 'refresh');
    }
}