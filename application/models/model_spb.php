<?php
class model_spb extends CI_Model
{

    private $_table = "tb_spb";
    public $id_spk;
    public $order_date;
    public $submit_date;
    public function rules()
    {
        return [

            [
                'field' => 'order_date',
                'label' => 'order_date',
                'rules' => 'required'
            ],


        ];
    }
    public function GetAll()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('tb_spk', 'tb_spk.id_spk=tb_spb.id_spk', 'left');
        $this->db->join('tb_detail_spb', 'tb_detail_spb.id_spb=tb_spb.id_spb', 'left');
        $this->db->join('tb_material', 'tb_material.id_material=tb_detail_spb.id_material', 'left');
        $this->db->order_by('tb_spb.id_spb', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    public function GetAll_submit_Null($id_spk)
    {

        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('tb_spk', 'tb_spk.id_spk=tb_spb.id_spk', 'left');
        $this->db->join('tb_detail_spb', 'tb_detail_spb.id_spb=tb_spb.id_spb', 'left');
        $this->db->join('tb_material', 'tb_material.id_material=tb_detail_spb.id_material', 'left');
        $this->db->where('tb_spb.submit_date', '=', Null);
        $this->db->or_where('tb_spb.id_spk', $id_spk);
        // $this->db->group_by('tb_spb.id_spk', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    public function GetAll_where_in()
    {
        $index = $this->db->query(
            "SELECT * FROM tb_spk 
            WHERE tb_spk.id_spk  IN (SELECT id_spk FROM tb_spb GROUP BY tb_spb.id_spk)"
        );
        return $index->result();
    }
    public function insert($post)
    {
        $this->order_date = $post['order_date'];
        $this->id_spk = $post['id_spk'];

        return $this->db->insert($this->_table, $this);
    }
    public function orderby()
    {
        $this->db->order_by('id_spb', 'DESC');
        return $this->db->get($this->_table);
    }
    public function detail($id_spk)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('tb_spk.id_spk', $id_spk);
        $query = $this->db->get();
        return $query->row();
    }
}