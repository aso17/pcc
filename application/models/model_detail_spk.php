<?php
class model_detail_spk extends CI_Model
{
    private $_table = "tb_detail_spk";
    public $id_material;
    public $id_submaterial;
    public $id_spk;
    public $jml_request;

    public function Getby_idspk($id_spk)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        // $this->db->join('tb_material', 'tb_material.id_material=tb_detail_spk.id_material');
        $this->db->join('tb_submaterial', 'tb_submaterial.id_material=tb_detail_spk.id_material', 'right');
        $this->db->where('id_spk', $id_spk);
        // $this->db->group_by("tb_submaterial.id_material");

        $query = $this->db->get();
        return $query->result();
    }
    public function insert($post, $idss)
    {
        $this->id_spk = $idss;
        $this->id_material = $post['id_material'];
        $this->id_submaterial = $post['id_submaterial'];
        $this->jml_request = $post['request'];
        $this->db->insert($this->_table, $this);
    }
    public function insert_next($post, $id_spk)
    {
        $this->id_spk = $id_spk;
        $this->id_material = $post['id_material'];
        $this->id_submaterial = $post['id_submaterial'];
        $this->jml_request = $post['request'];
        $this->db->insert($this->_table, $this);
    }
    public function detail($id_spk)
    {
        $this->db->select('*');
        $this->db->from('tb_detail_spk');
        $this->db->join('tb_spk', 'tb_spk.id_spk=tb_detail_spk.id_spk', 'left');
        $this->db->join('tb_spb', 'tb_spb.id_spk=tb_spk.id_spk', 'left');
        $this->db->where('tb_detail_spk.id_spk', $id_spk);
        // $this->db->group_by("tb_submaterial.id_material");
        $query = $this->db->get();
        $data = $query->result();
        foreach ($data as $d) {
            $id[] = $d->id_submaterial;
            $jml = count($id);
        }
        for ($index_sub = 0; $index_sub < $jml; $index_sub++) {
            $id_sub = $id[$index_sub];
            $this->db->select('*');
            $this->db->from('tb_submaterial');
            $this->db->join('tb_detail_spk', 'tb_detail_spk.id_submaterial=tb_submaterial.id_submaterial', 'left');
            $this->db->join('tb_spk', 'tb_spk.id_spk=tb_detail_spk.id_spk', 'left');
            $this->db->join('tb_spb', 'tb_spb.id_spk=tb_spk.id_spk', 'left');
            $this->db->or_Where('tb_submaterial.id_submaterial', $id_sub);
            $this->db->where('tb_detail_spk.id_spk', $id_spk);
            $sub[] = $this->db->get()->row();
        }
        return $sub;
    }
    public function get_bomid($bom_id)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('tb_spk', 'tb_spk.id_spk=tb_detail_spk.id_spk');
        $this->db->join('tb_material', 'tb_material.id_material=tb_detail_spk.id_material');
        $this->db->join('tb_submaterial', 'tb_submaterial.id_material=tb_material.id_material');
        $this->db->where('tb_spk.bom_id', $bom_id);
        $this->db->group_by("tb_submaterial.id_material");
        $query = $this->db->get();
        return $query->result();
    }

    public function delete($id_spk)
    {
        $this->db->where('id_spk', $id_spk);
        $this->db->delete($this->_table);
    }
}