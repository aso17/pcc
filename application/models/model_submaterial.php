<?php
class model_submaterial extends CI_Model
{
    private $_table = "tb_submaterial";
    public $id_material;
    public $nama_sub;
    public $ukuran;
    public $satuan;
    public function rules()
    {
        return [

            [
                'field' => 'nama_sub',
                'label' => 'submaterial',
                'rules' => 'required'
            ],

            [
                'field' => 'ukuran',
                'label' => 'ukuran',
                'rules' => 'required'
            ],
            [
                'field' => 'satuan',
                'label' => 'satuan',
                'rules' => 'required'
            ],



        ];
    }
    public function insert($post)
    {
        $this->id_material = $post['id_material'];
        $this->nama_sub = $post['nama_sub'];
        $this->ukuran = $post['ukuran'];
        $this->satuan = $post['satuan'];
        return $this->db->insert($this->_table, $this);
    }

    public function get_byid($id_material)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('tb_material', 'tb_material.id_material=tb_submaterial.id_material');
        $this->db->where('tb_submaterial.id_material', $id_material);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_id($id_submaterial)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        // $this->db->join('tb_material', 'tb_material.id_material=tb_submaterial.id_material');
        $this->db->where('id_submaterial', $id_submaterial);
        $query = $this->db->get();
        return $query->row();
    }
    public function update_ukuran($id_submaterial, $hasil)
    {
        $data = array(
            'ukuran' => $hasil

        );

        $this->db->where('id_submaterial', $id_submaterial);
        $this->db->update('tb_submaterial', $data);
    }
}