<?php
class model_spk extends CI_Model
{

    private $_table = "tb_spk";
    public $bom_id;
    public $type_sample;
    public $kategori;
    public $model_name;
    public $size;
    public $code_product;
    public $qty_product;
    public $tgl_spk;

    public function rules()
    {
        return [

            [
                'field' => 'bom_id',
                'label' => 'bom id',
                'rules' => 'required',
                'errors' => [

                    'required' => '%s harus diisi',
                    'is_unique' => '%s bom id tidak boleh sama'
                ],
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
                'field' => 'id_material',
                'label' => 'material',
                'rules' => 'required'
            ],
            [
                'field' => 'request',
                'label' => 'request',
                'rules' => 'required'
            ],
            [
                'field' => 'tgl_spk',
                'label' => 'tanggal',
                'rules' => 'required'
            ],
        ];
    }
    public function Getby_idbom($bom_id)
    {
        return $this->db->get_where($this->_table, ['bom_id' => $bom_id])->row();
    }
    public function GetAll()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->order_by('tb_spk.id_spk', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function GetAll_status_null()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where(['status' => NULL]);
        $this->db->order_by('tb_spk.id_spk', 'DESC');
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
        $this->tgl_spk = $post['tgl_spk'];


        return $this->db->insert($this->_table, $this);
    }
    public function orderby()
    {
        $this->db->order_by('id_spk', 'DESC');
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

    public function update_status($post)
    {
        $id_spk = $post['id_spk'];
        $data = [
            "status" => $post['nama_proses']
        ];
        $this->db->where('id_spk', $id_spk);
        $this->db->update('tb_spk', $data);
    }
}