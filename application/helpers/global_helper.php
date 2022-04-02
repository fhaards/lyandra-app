<?php

function isLogin()
{
    $ci = &get_instance();
    return $ci->session->level != null;
}

function isUser()
{
    $ci = &get_instance();
    return $ci->session->level == 'user';
}

function isAdmin()
{
    $ci = &get_instance();
    return $ci->session->level == 'admin';
}

function isSuperAdmin()
{
    $ci = &get_instance();
    return $ci->session->level == 'superadmin';
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
    return $ci->modelUser->findBy('username', $ci->session->username);
}

function getCompanyData()
{
    $ci = &get_instance();
    $ci->load->model('modelApp');
    return $ci->modelApp->findBy('about', 'id', '1');
}

function setDate($getDates)
{
    return date('D , d F Y', strtotime($getDates));
}

function setTimeDate($getDates)
{
    return date('d F Y - H:i', strtotime($getDates));
}

function myDateInterval($dateToCompare)
{
    $dateInterval = '';
    $dateToCompare = new DateTime($dateToCompare);
    $dateNow  = new DateTime(date('Y-m-d H:i:s', time()));
    $interval = $dateToCompare->diff($dateNow);

    $years    = (int)$interval->format('%Y');
    $months   = (int)$interval->format('%m');
    $days     = (int)$interval->format('%d');
    $hours    = (int)$interval->format('%H');
    $minutes  = (int)$interval->format('%i');

    if ($years >= 1) {
        $dateInterval .= $years . ' years';
    }
    if ($months >= 1) {
        $dateInterval .= ' ' . $months . ' months';
    }
    if ($days >= 1) {
        $dateInterval .= ' ' . $days . ' days';
    }
    if (empty($dateInterval)) {
        if ($hours == 0 && $minutes <= 5) {
            $dateInterval .= 'now';
        } else {
            if ($hours >= 1) {
                $dateInterval .= ' ' . $hours . ' hours';
            }

            if ($minutes >= 1) {
                $dateInterval .= ' ' . $minutes . ' minutes';
            }
        }
    }

    return trim($dateInterval);
}


// FOR TOURNAMENT 
function setTournStatus($getStatus)
{
    $setStyle = "";
    if ($getStatus == '1') :
        $setStyle = '<span class="badge badge-opacity-info">Open Registration</span>';
    elseif ($getStatus == '2') :
        $setStyle = '<span class="badge badge-opacity-primary">Ongoing</span>';
    elseif ($getStatus == '3') :
        $setStyle = '<span class="badge badge-opacity-success">Closed/Finish</span>';
    endif;
    return $setStyle;
}

// FOR CONTINGENT 
function setContStatus($style, $getStatus)
{
    $setStyle = "";
    if ($style == 'with-style') :
        if ($getStatus == '1') :
            $setStyle = '<span class="badge badge-opacity-success">Active</span>';
        elseif ($getStatus == '2') :
            $setStyle = '<span class="badge badge-opacity-secondary text-dark">Inactive</span>';
        elseif ($getStatus == '3') :
            $setStyle = '<span class="badge badge-opacity-danger">Disbanded</span>';
        endif;
    else :
        if ($getStatus == '1') :
            $setStyle = 'Active';
        elseif ($getStatus == '2') :
            $setStyle = 'Inactive';
        elseif ($getStatus == '3') :
            $setStyle = 'Disbanded';
        endif;
    endif;
    return $setStyle;
}
