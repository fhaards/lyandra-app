<?php

function isAdmin()
{
    $ci = &get_instance();
    return $ci->session->level == 'admin';
}

function show404IfNotAdmin()
{
    if (!isAdmin()) {
        redirect('error404');
    }
}

function redirectIfNotLogin()
{
    $ci = &get_instance();
    if ($ci->session->userdata('status') != "login") {
        redirect(base_url("auth"));
    }
}

function getUserData()
{
    $ci = &get_instance();
    $ci->load->model('modelUser');
    return $ci->modelUser->findBy('email', $ci->session->email);
}
