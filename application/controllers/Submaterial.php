<?php
class Submaterial extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_submaterial');
        $this->load->model('model_material');
    }
    public function detail_material($id_material)
    {
        $data['material'] = $this->model_material->get_byid($id_material);
        $data['submaterial'] = $this->model_submaterial->get_byid($id_material);
        $this->template->load('template/index', 'warehouse/submaterial/index', $data);
    }

    public function create($id_material)
    {

        $data['material'] = $this->model_material->get_byid($id_material);
        $this->template->load('template/index', 'warehouse/submaterial/creat', $data);
    }
    public function store()
    {

        $post = $this->input->post();
        $this->form_validation->set_message('required', '%s Tidak Boleh Kosong!!!');
        $submaterial = $this->model_submaterial;
        $validation = $this->form_validation;
        $validation->set_rules($submaterial->rules());
        if ($validation->run() == 0) {
            $id_material = $post['id_material'];
            $data['material'] = $this->model_material->get_byid($id_material);
            $this->template->load('template/index', 'warehouse/submaterial/creat', $data);
        } else {
            $post = $this->input->post();
            $this->model_submaterial->insert($post);
            $this->session->set_flashdata('success', 'Data Submaterial telah ditambahakan');
            redirect('submaterial/detail_material/' . $post['id_material'], 'refresh');
        }
    }
    public function edit($id_submaterial)
    {
        $data['material'] = $this->model_submaterial->get_id($id_submaterial);
        $this->template->load('template/index', 'warehouse/submaterial/edit', $data);
    }
    public function update()
    {
        $post = $this->input->post();
        $this->model_submaterial->update($post);
        $this->session->set_flashdata('info', 'Data Submaterial telah diubah');
        redirect('submaterial/detail_material/' . $post['id_material'], 'refresh');
    }
    public function delete($id_submaterial, $id_material)
    {

        $this->model_submaterial->delete($id_submaterial);
        $this->session->set_flashdata('warning', 'Data Material dihapus');

        $id_ma = $id_material;
        redirect('submaterial/detail_material/' . $id_ma, 'refresh');
    }
}