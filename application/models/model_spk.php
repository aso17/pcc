<?php
class model_spk extends CI_Model
{

    private $_table = "tb_spk";
    public $bom_id;
    public $id_proses;
    public $type_sample;
    public $kategori;
    public $model_name;
    public $size;
    public $code_product;
    public $qty_product;
    public $decription;
    public function rules()
    {
        return [

            [
                'field' => 'bom_id',
                'label' => 'bom_id',
                'rules' => 'required'
            ],
            [
                'field' => 'type_sample',
                'label' => 'type_sample',
                'rules' => 'required'
            ],

            [
                'field' => 'kategori',
                'label' => 'kategori',
                'rules' => 'required'
            ],
            [
                'field' => 'model_name',
                'label' => 'model_name',
                'rules' => 'required'
            ],

            [
                'field' => 'size',
                'label' => 'size',
                'rules' => 'required'
            ],
            [
                'field' => 'code_product',
                'label' => 'code_product',
                'rules' => 'required'
            ],
            [
                'field' => 'qty_product',
                'label' => 'qty_product',
                'rules' => 'required'
            ],
            [
                'field' => 'material[]',
                'label' => 'material[]',
                'rules' => 'required'
            ],
        ];
    }
    public function GetAll()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $query = $this->db->get();
        return $query->result();
    }
    public function insert($post)
    {
        $this->bom_id = $post['bom_id'];
        $this->type_sample = $post['type_sample'];
        $this->kategori = $post['kategori'];
        $this->model_name = $post['model_name'];
        $this->size = $post['size'];
        $this->code_product = $post['code_product'];
        $this->qty_product = $post['qty_product'];
        $this->decription = $post['decription'];

        return $this->db->insert($this->_table, $this);
    }
    public function orderby()
    {
        $this->db->order_by('id_spk', 'DESC');
        return $this->db->get($this->_table);
    }
}