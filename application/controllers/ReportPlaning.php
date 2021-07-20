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
            $this->model_spk->filter($post);
            $this->template->load('template/index', 'report/dataPlaning');
        }
    }
}