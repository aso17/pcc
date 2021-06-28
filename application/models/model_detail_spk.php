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
}