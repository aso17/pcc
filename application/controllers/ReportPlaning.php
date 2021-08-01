<?php
class ReportPlaning extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_report');
        $this->load->model('model_spk');
    }
    public function index()
    {
        $this->template->load('template/index', 'report/index');
    }

    public function filter()
    {
        $post = $this->input->post();
        $report = $this->model_report;
        $validation = $this->form_validation;
        $validation->set_rules($report->rules());
        if ($validation->run() == 0) {
            $this->template->load('template/index', 'report/index');
        } else {

            $post = $this->input->post();
            $tgl_awal = $post['tgl_awal'];
            $tgl_ahir = $post['tgl_ahir'];
            $data['tgl_awal'] = $post['tgl_awal'];
            $data['tgl_ahir'] = $post['tgl_ahir'];
            $data['spk'] = $this->model_spk->filter($tgl_awal, $tgl_ahir);
            $this->template->load('template/index', 'report/dataPlaning', $data);
        }
    }

    public function cetak($tgl_awal, $tgl_ahir)
    {
        $data['tgl_awal'] = $tgl_awal;
        $data['tgl_ahir'] = $tgl_ahir;

        $data['spk'] = $this->model_spk->filter($tgl_awal, $tgl_ahir);
        $this->load->library('fungsi');
        $this->fungsi->generate('report/dataPlaning', $data);
    }
}