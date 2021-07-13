<?php
class model_detail_spk extends CI_Model
{
    private $_table = "tb_detail_spk";
    public $id_submaterial;
    public $id_spk;

    public function Getby_idbom($bom_id)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('tb_submaterial', 'tb_submaterial.id_material=tb_detail_spk.id_submaterial');
        // $this->db->join('tb_material', 'tb_material.id_material=tb_submaterial.id_material');
        $this->db->join('tb_spk', 'tb_spk.id_spk=tb_detail_spk.id_spk');
        $this->db->where('tb_spk.bom_id', $bom_id);
        $this->db->group_by("tb_submaterial.id_material");
        $query = $this->db->get();
        return $query->result();
    }
    public function insert($post, $idss)
    {


        $this->id_spk = $idss;
        $this->id_submaterial = $post['id_submaterial'];
        $this->db->insert($this->_table, $this);
    }
    public function detail($id_spk)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('tb_submaterial', 'tb_submaterial.id_material=tb_detail_spk.id_submaterial', 'left');
        // $this->db->join('tb_spk', 'tb_spk.id_spk=tb_spk.id_spk');
        $this->db->where('tb_detail_spk.id_spk', $id_spk);
        $query = $this->db->get();
        return $query->result();
    }
}