<?php
class model_material extends CI_Model
{

    private $_table = "tb_material";
    public $nama_material;

    public function rules()
    {
        return [

            [
                'field' => 'nama_material',
                'label' => 'nama_material',
                'rules' => 'required'
            ],




        ];
    }
    public function insert($post)
    {

        $this->nama_material = $post['nama_material'];
        return $this->db->insert($this->_table, $this);
    }

    public function GetAll()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_byid($id_material)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('id_material', $id_material);
        $query = $this->db->get();
        return $query->row();
    }
    public function update_ukuran($post)
    {
        $idmaterial = $post['id_material'];
        $request = $post['qty_request'];
        $ukuran_request = [];
        $index_request = 0;
        $jml_dipilih    = count($idmaterial);
        $jml_dipilih    = count($request);
        for ($x = 0; $x < $jml_dipilih; $x++) {
            for ($ukuran = 0; $ukuran < $jml_dipilih; $ukuran++) {
                $ukuran = $this->db->get_where('tb_material', ['id_material' => $idmaterial[$x]])->result();
                $jm_ukuran = count($ukuran);
                for ($d = 0; $d < $jm_ukuran; $d++) {
                    $ukuran_request[] = (int)$ukuran[$d]->ukuran - $request[$x];
                    foreach ($ukuran_request as $r) {
                        $in[$index_request] = $r;
                        $t = count($in);
                        $index_request++;
                        for ($i = 0; $i < $t; $i++) {
                            $data = [
                                "ukuran" => $in[$i],
                            ];
                            $this->db->where('id_material', $idmaterial[$x]);
                            $this->db->update('tb_material', $data);
                        }
                    }
                }
            }
        }
    }
}