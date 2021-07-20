<?php
class model_report extends CI_Model
{
    public function rules()
    {
        return [

            [
                'field' => 'tgl_awal',
                'label' => 'tanggal',
                'rules' => 'required',
                'errors' => [
                    'required' => '%s harus diisi',

                ],

            ],
            [
                'field' => 'tgl_ahir',
                'label' => 'tanggal',
                'rules' => 'required',
                'errors' => [
                    'required' => '%s harus diisi',

                ],
            ],



        ];
    }
}