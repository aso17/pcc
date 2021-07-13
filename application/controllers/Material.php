<?php
class Material extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_material');
        $this->load->model('model_submaterial');
    }
    public function get_sub()
    {
        $id_material = $_GET['id'];
        $data = $this->model_submaterial->get_byid($id_material);
        $output = '<option selected hidden value="">-- pilih --
        </option>';
        foreach ($data as $row) {
            $output .= '<option value="' . $row->id_submaterial . '">' . $row->nama_sub . '</option>';
        }

        $this->output
            ->set_output(json_encode($output));
    }
    public function index()
    {
        $data['material'] = $this->model_material->GetAll();
        $this->template->load('template/index', 'warehouse/material/index', $data);
    }
    public function create()
    {
        $this->template->load('template/index', 'warehouse/material/create');
    }
    public function store()
    {
        $post = $this->input->post();
        $this->form_validation->set_message('required', '%s Tidak Boleh Kosong!!!');

        $material = $this->model_material;
        $validation = $this->form_validation;
        $validation->set_rules($material->rules());
        if ($validation->run() == 0) {
            $this->template->load('template/index', 'warehouse/material/create');
        } else {

            $post = $this->input->post();
            $this->model_material->insert($post);
            $this->session->set_flashdata('success', 'Data Material telah ditambahakan');
            redirect('Material', 'refresh');
        }
    }
}