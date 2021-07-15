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
        $this->db->join('tb_detail_spk', 'tb_detail_spk.id_spk=tb_spk.id_spk', 'left');
        $this->db->group_by('tb_detail_spk.id_spk');
        $this->db->order_by('tb_spb.id_spb', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function GetAll_where_in()
    {
        $index = $this->db->query(
            "SELECT * FROM tb_spb join tb_spk on tb_spk.id_spk=tb_spb.id_spk
            WHERE submit_date is Null "
        );

        return $index->result();
    }
    public function insert($post)
    {
        $this->id_spk = $post['id_spk'];
        $this->order_date = $post['order_date'];
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
    public function updateSubmit($post, $id_spk)
    {
        $data = [
            "submit_date" => $post['submit_date']
        ];
        $this->db->where('id_spk', $id_spk);
        $this->db->update('tb_spb', $data);
    }
    public function detail_spb($id_spk)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('tb_spk', 'tb_spk.id_spk=tb_spb.id_spk');
        $this->db->where('tb_spb.id_spk', $id_spk);
        $query = $this->db->get();
        return $query->row();
    }
    public function GetAll_submit_Null($id_spk)
    {

        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('tb_spb', 'tb_spb.id_spb=tb_detail_spb.id_spb', 'left');
        $this->db->join('tb_spk', 'tb_spk.id_spk=tb_spb.id_spk', 'left');
        $this->db->join('tb_material', 'tb_material.id_material=tb_detail_spb.id_material', 'left');
        $this->db->where('tb_spb.submit_date', '=', Null);
        $this->db->or_where('tb_spb.id_spb', $id_spk);
        // $this->db->group_by('tb_spb.id_spk', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
}