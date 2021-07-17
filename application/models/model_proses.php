<?php
class model_proses extends CI_Model
{
    private $_table = "tb_proses";
    public $id_proses;
    public $id_spb;
    public $nama_proses;
    public $tgl_proses;
    public function rules()
    {
        return [

            [
                'field' => 'nama_proses',
                'label' => 'nama proses',
                'rules' => 'required'
            ],
            [
                'field' => 'tgl_proses',
                'label' => 'tanggal',
                'rules' => 'required'
            ],




        ];
    }

    public function insert($post)
    {
        $this->id_spb = $post['id_spb'];
        $this->nama_proses = $post['nama_proses'];
        $this->tgl_proses = $post['tgl_proses'];
        return $this->db->insert($this->_table, $this);
    }
    public function Get_submit_true()
    {
        $index = $this->db->query(
            "SELECT * FROM tb_spb join tb_spk on tb_spk.id_spk=tb_spb.id_spk
            WHERE submit_date is NOT Null "
        );
        return $index->result();
    }
    public function Get_order_proses($id_spb)
    {
        $index = $this->db->query(
            "SELECT * FROM tb_proses join tb_spb on tb_spb.id_spb=tb_proses.id_spb
            WHERE tb_proses.id_spb='$id_spb' ORDER BY tb_proses.id_proses DESC "
        );
        return $index->row();
    }
}