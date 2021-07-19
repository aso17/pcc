<?php
class model_user extends CI_Model
{
    private $_table = "tb_user";
    public $id_user;
    public $nikKaryawan;
    public $namaLengkap;
    public $departemen;
    public $devisi;
    public $username;
    public $password;
    public function rules()
    {
        return [
            [
                'field' => 'nikKaryawan',
                'label' => 'nik',
                'rules' => 'required|numeric|is_unique[tb_user.nikKaryawan]',
                'errors' => [
                    'numeric' => '%s harus angka',
                    'required' => '%s harus diisi',
                    'is_unique' => '%s user sudah ada'
                ],
            ],
            [
                'field' => 'namaLengkap',
                'label' => 'nama',
                'rules' => 'required',
                'errors' => [
                    'required' => '%s harus diisi',

                ],
            ],


            [
                'field' => 'departemen',
                'label' => 'departemen',
                'rules' => 'required',
                'errors' => [
                    'required' => '%s harus diisi',

                ],
            ],
            [
                'field' => 'devisi',
                'label' => 'devisi',
                'rules' => 'required',
                'errors' => [
                    'required' => '%s harus diisi',

                ],
            ],
            [
                'field' => 'username',
                'label' => 'username',
                'rules' => 'required',
                'errors' => [
                    'required' => '%s harus diisi',

                ],

            ],
            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required',
                'errors' => [
                    'required' => '%s harus diisi',

                ],
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
        $this->nikKaryawan = $post['nikKaryawan'];
        $this->namaLengkap = $post['namaLengkap'];
        $this->departemen = $post['departemen'];
        $this->devisi = $post['devisi'];
        $this->username = $post['username'];
        $this->password = password_hash($post['password'], PASSWORD_BCRYPT);
        return $this->db->insert($this->_table, $this);
    }
}