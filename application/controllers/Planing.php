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

            //tb detail spk
            $idspk = $this->model_spk->orderby()->row();

            $idsp = $idspk->id_spk;

            if (empty($idsp)) {
                $idss = 1;
            } else {
                $idss = $idsp;
            }

            $this->model_detail_spk->insert($post, $idss);
            $this->session->set_flashdata('success', 'Surat Perintah kerja telah ditambahkan');
            redirect('Planing', 'refresh');
        }
    }
}