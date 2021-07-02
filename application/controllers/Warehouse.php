<?php
class Warehouse extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_spb');
        $this->load->model('model_spk');
        $this->load->model('model_material');
        $this->load->model('model_detail_spb');
        $this->load->model('model_detail_spk');
    }
    public function index()
    {
        $this->template->load('template/index', 'warehouse/index');
    }
    public function daftarSpb()
    {
        $data['spb'] = $this->model_spb->GetAll_where_in();
        $this->template->load('template/index', 'warehouse/daftarspb', $data);
    }

    public function approve($id_spk)
    {
    }
}