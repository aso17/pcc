<?php
class model_detail_spb extends CI_Model
{
    private $_table = "tb_detail_spb";
    public $id_spb;
    public $id_spk;
    public $id_material;
    public $qty_request;

    public function rules()
    {
        return [

            [
                'field' => 'order_date',
                'label' => 'order_date',
                'rules' => 'required'
            ],
            [
                'field' => 'qty_request[]',
                'label' => 'qty_request[]',
                'rules' => 'required'
            ],


        ];
    }
    public function insert($post, $id_b, $id_spk)
    {

        $idmaterial = $post['id_material'];
        $request = $post['qty_request'];

        $jml_dipilih    = count($idmaterial);
        $jml_dipilih    = count($request);
        for ($x = 0; $x < $jml_dipilih; $x++) {
            $this->id_spb = $id_b;
            $this->id_spk = $id_spk;
            $this->id_material = $idmaterial[$x];
            $this->qty_request = $request[$x];
            $this->db->insert($this->_table, $this);
        }
    }
    public function detail($id_spk)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('tb_material', 'tb_material.id_material=tb_detail_spk.id_material', 'left');
        // $this->db->join('tb_spk', 'tb_spk.id_spk=tb_spk.id_spk');
        $this->db->where('tb_detail_spk.id_spk', $id_spk);
        $query = $this->db->get();
        return $query->result();
    }
}