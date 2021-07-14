<?php
class Planing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_spk');
        $this->load->model('model_material');
        $this->load->model('model_detail_spk');
    }
    public function index()
    {
        $data['spk'] = $this->model_spk->GetAll();
        $this->template->load('template/index', 'planing/index', $data);
    }
    public function material()
    {
        $data['material'] = $this->model_material->GetAll();
        $this->template->load('template/index', 'planing/material', $data);
    }
    public function create()
    {
        $data['material'] = $this->model_material->GetAll();
        $this->template->load('template/index', 'planing/create', $data);
    }
    public function store()
    {
        $post = $this->input->post();
        $this->form_validation->set_message('required', '%s Tidak Boleh Kosong!!!');
        $planing = $this->model_spk;
        $validation = $this->form_validation;
        $validation->set_rules($planing->rules());
        if ($validation->run() == 0) {
            $data['material'] = $this->model_material->GetAll();
            $this->template->load('template/index', 'planing/create', $data);
        } else {

            $post = $this->input->post();
            //tb_spk         
            $this->model_spk->insert($post);
            $idspk = $this->model_spk->orderby()->row();
            $idsp = $idspk->id_spk;

            if (empty($idsp)) {
                $idss = 1;
            } else {
                $idss = $idsp;
            }

            $this->session->set_flashdata('success', 'Surat Perintah kerja telah ditambahkan');
            $bom_id = $post['bom_id'];
            $data['spk'] = $this->model_spk->Getby_idbom($bom_id);
            $this->model_detail_spk->insert($post, $idss);
            $data['material'] = $this->model_material->GetAll();
            $this->template->load('template/index', 'planing/create_next', $data);
        }
    }
    public function store_next()
    {
        $post = $this->input->post();
        $this->form_validation->set_message('required', '%s Tidak Boleh Kosong!!!');
        $planing = $this->model_spk;
        $validation = $this->form_validation;
        $validation->set_rules($planing->rules());
        if ($validation->run() == 0) {
            $data['material'] = $this->model_material->GetAll();
            $this->template->load('template/index', 'planing/create_next', $data);
        } else {
            $post = $this->input->post();
            $idspk = $this->model_spk->orderby()->row();
            $idsp = $idspk->id_spk;
            if (empty($idsp)) {
                $idss = 1;
            } else {
                $idss = $idsp;
            }
        }
        $this->session->set_flashdata('success', 'Surat Perintah kerja telah ditambahkan');
        $post = $this->input->post();
        $bom_id = $post['bom_id'];
        $data['spk'] = $this->model_spk->Getby_idbom($bom_id);
        $this->model_detail_spk->insert($post, $idss);
        $data['material'] = $this->model_material->GetAll();
        $this->template->load('template/index', 'planing/create_next', $data);
    }
    public function show($id_spk)
    {
        $data['spk'] = $this->model_spk->detail($id_spk);
        $data['detail_spk'] = $this->model_detail_spk->detail($id_spk);

        $this->template->load('template/index', 'planing/show', $data);
    }
}