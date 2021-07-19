<?php
class Planing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_spk');
        $this->load->model('model_submaterial');
        $this->load->model('model_material');
        $this->load->model('model_spb');
        $this->load->model('model_detail_spk');
        $this->load->model('model_proses');
        check_not_login();
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
            $this->session->set_flashdata('success', 'Surat Perintah kerja telah ditambahkan');




            $id_submaterial = $post['id_submaterial'];
            $ukuran = $this->model_submaterial->get_id($id_submaterial);
            $nilai = $ukuran->ukuran;
            $hasil = $nilai - $post['request'];
            $this->model_submaterial->update_ukuran($id_submaterial, $hasil);

            $idspk = $this->model_spk->orderby()->row();
            $idsp = $idspk->id_spk;

            if (empty($idsp)) {
                $idss = 1;
            } else {
                $idss = $idsp;
            }
            $this->model_detail_spk->insert($post, $idss);
            // $data['material'] = $this->model_material->GetAll();

            $bom_id = $post['bom_id'];
            $data['spk'] = $this->model_spk->Getby_idbom($bom_id);

            $id_spk = $data['spk']->id_spk;

            $data['detail_spk'] = $this->model_detail_spk->detail($id_spk);



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
            $id_spk = $post['id_spk'];
            // $this->session->set_flashdata('success', 'Surat Perintah kerja telah ditambahkan');

            $bom_id = $post['bom_id'];
            $data['spk'] = $this->model_spk->Getby_idbom($bom_id);
            $id_submaterial = $post['id_submaterial'];

            $ukuran = $this->model_submaterial->get_id($id_submaterial);

            $nilai = $ukuran->ukuran;
            $hasil = $nilai - $post['request'];

            $this->model_submaterial->update_ukuran($id_submaterial, $hasil);

            $this->model_detail_spk->insert_next($post, $id_spk);


            $data['detail_spk'] = $this->model_detail_spk->detail($id_spk);

            $data['material'] = $this->model_material->GetAll();


            $this->template->load('template/index', 'planing/create_next', $data);
        }
    }
    public function show($id_spk)
    {

        $data['spk'] = $this->model_spk->detail($id_spk);
        $data['detail_spk'] = $this->model_detail_spk->detail($id_spk);
        $this->template->load('template/index', 'planing/show', $data);
    }

    public function proses()
    {

        $data['spb'] = $this->model_proses->Get_submit_true();
        $this->template->load('template/index', 'planing/proses', $data);
    }
    public function prosesCreate($id_spk, $id_spb)
    {

        $data['proses'] = $this->model_proses->Get_order_proses($id_spb);
        $data['spb'] = $this->model_spb->detail_spb($id_spk);
        $data['detail_spk'] = $this->model_detail_spk->detail($id_spk);
        $this->template->load('template/index', 'planing/prosesCreat', $data);
    }

    public function prosesStore()
    {
        $post = $this->input->post();
        $this->form_validation->set_message('required', '%s Tidak Boleh Kosong!!!');
        $proses = $this->model_proses;
        $validation = $this->form_validation;
        $validation->set_rules($proses->rules());
        if ($validation->run() == 0) {
            $id_spk = $post['id_spk'];
            $data['spb'] = $this->model_spb->detail_spb($id_spk);
            $data['detail_spk'] = $this->model_detail_spk->detail($id_spk);
            $this->template->load('template/index', 'planing/prosesCreat', $data);
        } else {
            $post = $this->input->post();
            $this->model_spk->update_status($post);

            $this->model_proses->insert($post);
            $id_spk = $post['id_spk'];
            $id_spb = $post['id_spb'];
            $this->session->set_flashdata('success', 'Proses telah dilakukan');
            $data['proses'] = $this->model_proses->Get_order_proses($id_spb);
            $data['spb'] = $this->model_spb->detail_spb($id_spk);
            $data['detail_spk'] = $this->model_detail_spk->detail($id_spk);
            $this->template->load('template/index', 'planing/prosesCreat', $data);
        }
    }
}