<?php
class model_login extends CI_Model
{
    public function rules()
    {
        return [

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
}