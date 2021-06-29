<?php
class Spb extends CI_Controller
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
        $this->template->load('template/index', 'spb/index', $data);
    }
    public function create($id_spk)
    {
        $data['spk'] = $this->model_spk->detail($id_spk);
        $data['detail_spk'] = $this->model_detail_spk->detail($id_spk);
        $this->template->load('template/index', 'spb/create', $data);
    }
    public function store()
    {
        $id_material = $this->input->post('qty_request');
        var_dump($id_material);
    }
}