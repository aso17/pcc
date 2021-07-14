<?php
class model_detail_spk extends CI_Model
{
    private $_table = "tb_detail_spk";
    public $id_material;
    public $id_submaterial;
    public $id_spk;
    public $jml_request;

    public function Getby_idbom($bom_id)
    {
    }
    public function insert($post, $idss)
    {


        $this->id_spk = $idss;
        $this->id_material = $post['id_material'];
        $this->id_submaterial = $post['id_submaterial'];
        $this->jml_request = $post['request'];
        $this->db->insert($this->_table, $this);
    }
    public function detail($id_spk)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('tb_material', 'tb_material.id_material=tb_detail_spk.id_material');
        $this->db->join('tb_submaterial', 'tb_submaterial.id_material=tb_material.id_material');
        $this->db->where('tb_detail_spk.id_spk', $id_spk);
        $this->db->group_by("tb_submaterial.id_material");
        $query = $this->db->get();
        return $query->result();
    }
}