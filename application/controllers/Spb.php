<?php
class Spb extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_spb');
        $this->load->model('model_spk');
        $this->load->model('model_material');
        $this->load->model('model_submaterial');
        $this->load->model('model_detail_spk');
    }
    public function index()
    {
        $data['spk'] = $this->model_spk->GetAll_status_null();
        $this->template->load('template/index', 'spb/index', $data);
    }
    public function daftar()
    {
        $data['spb'] = $this->model_spb->GetAll();
        $this->template->load('template/index', 'spb/daftar', $data);
    }
    public function create($id_spk)
    {
        $data['spk'] = $this->model_spk->detail($id_spk);
        $data['detail_spk'] = $this->model_detail_spk->detail($id_spk);
        $this->template->load('template/index', 'spb/create', $data);
    }
    public function store()
    {

        $this->form_validation->set_message('required', '%s Tidak Boleh Kosong!!!');
        $spb = $this->model_spb;
        $validation = $this->form_validation;
        $validation->set_rules($spb->rules());
        if ($validation->run() == 0) {
            $post = $this->input->post();
            $id_spk = $post['id_spk'];
            $data['spk'] = $this->model_spk->detail($id_spk);
            $data['detail_spk'] = $this->model_detail_spk->detail($id_spk);
            $this->template->load('template/index', 'spb/create', $data);
        } else {

            $post = $this->input->post();

            //tb_spb         
            $this->model_spb->insert($post);
            $this->session->set_flashdata('success', 'Request Barang Berhasil');
            redirect('Spb/daftar', 'refresh');
        }
    }

    public function show($id_spk)
    {

        $data['spb'] = $this->model_spb->detail_spb($id_spk);
        $data['detail_spk'] = $this->model_detail_spk->detail($id_spk);
        $this->template->load('template/index', 'spb/show', $data);
    }
}