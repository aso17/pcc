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
    public function getBy_username($username)
    {
        return $this->db->get_where($this->_table, ['username' => $username])->row();
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
    public function getBy_id($id_user)
    {

        return $this->db->get_where($this->_table, ['id_user' => $id_user])->row();
    }

    public function update($post)
    {
        $data = [
            "nikKaryawan" => $post['nikKaryawan'],
            "namaLengkap" => $post['namaLengkap'],
            "departemen" => $post['departemen'],
            "devisi" => $post['devisi'],
            "username" => $post['username'],
            "password" => password_hash($post['password'], PASSWORD_BCRYPT)
        ];
        $this->db->where('id_user', $post['id_user']);
        $this->db->update('tb_user', $data);
    }



    public function delete($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete($this->_table);
    }
}