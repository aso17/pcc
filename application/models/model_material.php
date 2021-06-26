<?php
class model_material extends CI_Model
{

    private $_table = "tb_material";
    public $nama_material;
    public $ukuran;

    public function rules()
    {
        return [

            [
                'field' => 'nama_material',
                'label' => 'nama_material',
                'rules' => 'required'
            ],
            // [
            //     'field' => 'nama_material',
            //     'label' => 'nama_material',
            //     'rules' => 'is_unique[tb_material.nama_material]'
            // ],

            [
                'field' => 'ukuran',
                'label' => 'ukuran',
                'rules' => 'required'
            ],

        ];
    }
    public function insert($post)
    {

        $this->nama_material = $post['nama_material'];
        $this->ukuran = $post['ukuran'];

        return $this->db->insert($this->_table, $this);
    }

    public function GetAll()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $query = $this->db->get();
        return $query->result();
    }
}