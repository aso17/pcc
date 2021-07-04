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

    public function approve($id_spb)
    {
        //mengambil data yg belum ter approve
        $data['spk'] = $this->model_spb->detail_spb($id_spb);
        $data['spb'] = $this->model_detail_spb->GetAll_submit_Null($id_spb);
        $this->template->load('template/index', 'warehouse/approve', $data);
    }
    public function Store()
    {
        $post = $this->input->post();
        $id_spb = $post['id_spk'];
        $validation =  $this->form_validation->set_rules('submit_date', 'Tanggal submit', 'required');
        $this->form_validation->set_message('required', '%s Tidak Boleh Kosong!!!');



        if ($validation->run() == 0) {
            $id_spb = $post['id_spb'];
            // $this->session->set_flashdata('warning', 'tanggal wajib diisi!!');
            //mengambil data yg belum ter approve
            $data['spk'] = $this->model_spb->detail_spb($id_spb);
            $data['spb'] = $this->model_detail_spb->GetAll_submit_Null($id_spb);
            $this->template->load('template/index', 'warehouse/approve', $data);
        } else {
            $post = $this->input->post();
            $this->model_spb->updateSubmit($post, $id_spb);
            $this->session->set_flashdata('success', 'berhasil diapprove');
            redirect('Warehouse/daftarSpb');
        }
    }
}