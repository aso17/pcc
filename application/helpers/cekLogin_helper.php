<?php

function check_not_login()
{
    $CI = &get_instance();
    $user_session = $CI->session->userdata('id_user');
    if ($user_session == FALSE) {
        $CI->session->set_flashdata('error', 'Anda Harus Login!');
        redirect('Login', 'refresh');
    }
}

function check_role()
{
    $CI = &get_instance();
    $user_session = $CI->session->userdata('level');
    if ($user_session != '1') {
        $CI->session->set_flashdata('error', 'Hak Akses Terbatas!');
        redirect('dashboard', 'refresh');
    }
}