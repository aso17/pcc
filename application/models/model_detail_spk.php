<?php
class model_detail_spk extends CI_Model
{
    private $_table = "tb_detail_spk";
    public $id_material;
    public $id_spk;


    public function insert($post, $idss)
    {

        $id_mat = $post['material'];
        $jml_dipilih    = count($id_mat);
        for ($x = 0; $x < $jml_dipilih; $x++) {
            $this->id_spk = $idss;
            $this->id_material = $id_mat[$x];
            $this->db->insert($this->_table, $this);
        }
    }
    public function detail($id_spk)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('tb_material', 'tb_material.id_material=tb_detail_spk.id_material', 'left');
        $this->db->join('tb_spk', 'tb_spk.id_spk=tb_spk.id_spk');
        $this->db->where('tb_detail_spk.id_spk', $id_spk);
        $query = $this->db->get();
        return $query->result();
    }
}