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

function redirectIfSuperadmin()
{
    $ci = &get_instance();
    if ($ci->session->userdata('level') == "superadmin") {
        return show_404();
    }
}

function getUserData()
{
    $ci = &get_instance();
    $ci->load->model('modelUser');
    return $ci->modelUser->findBy('username', $ci->session->username);
}

function getUserAccount()
{
    $ci = &get_instance();
    $ci->load->model('modelUser');
    return $ci->modelUser->findByUserAccount('user_id', $ci->session->userid);
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

function compareDate($date){
    $date_now = date("Y-m-d H:i:s"); // this format is string comparable

    if ($date_now >= $date) {
        $result = '2';
    }else{
        $result = '1';
    }
    return $result;
}

// PROFILE 
function loadProfilePhoto($getId, $getValue)
{
    $response = "";
    if ($getValue == NULL) :
        $response = 'default.png';
    else :
        $response = $getId . '/' . $getValue;
    endif;
    return $response;
}

function checkUserStatus($getStatus)
{
    $setStyle = "";
    $checkLevel = "";
    $setStatus = $getStatus;
    if (isSuperAdmin()) {
        $checkLevel = '';
    } else {
        if ($getStatus == '2') :
            $checkLevel = " , You can submit a competition ";
        else :
            $checkLevel = " , Complete youre account Information";
        endif;
    }

    if ($setStatus == 0) :
        $setStyle = '<span class="badge badge-pill badge-danger fw-bold d-inline-flex align-items-center justify-content-center"><i class="mdi mdi-exclamation me-2"></i> <span> Inactive </span> <span> ' . $checkLevel . '</span> ';
    elseif ($setStatus == 1) :
        $setStyle = '<span class="badge badge-pill badge-secondary text-dark fw-bold d-inline-flex align-items-center justify-content-center"><i class="mdi mdi-clock me-2"></i> <span> Pending </span> <span> ' . $checkLevel . '</span> ';
    else :
        $setStyle = '<span class="badge badge-opacity-primary fw-bold d-inline-flex align-items-center justify-content-center"><i class="mdi mdi-check me-2"></i>  <span> Active </span> <span>' . $checkLevel . '</span>';
    endif;
    return $setStyle;
}



// FOR TOURNAMENT 
function setTournStatus($getStatus)
{
    $setStyle = "";
    if ($getStatus == '1') :
        $setStyle = '<span class="text-info fw-bolder">Open Registration</span>';
    elseif ($getStatus == '2') :
        $setStyle = '<span class="text-dark fw-bolder">Closed Registration</span>';
    elseif ($getStatus == '3') :
        $setStyle = '<span class="text-success fw-bolder">Finish</span>';
    endif;
    return $setStyle;
}

function getDataIfNull($getData)
{
    $response = "";
    if ($getData == NULL) :
        $response = '<i class="text-secondary"> --- </i>';
    else :
        $response = $getData;
    endif;
    return $response;
}

function checkJoinParticipant($tourid, $uid)
{
    $ci = &get_instance();
    $ci->load->model('modelTournament');
    return $ci->modelTournament->checkParticipant($tourid, $uid);
}

function setParticipantStatusCheck($tourid, $uid)
{
    $ci = &get_instance();
    $ci->load->model('modelTournament');
    return $ci->modelTournament->checkParticipantStatus($tourid, $uid);
}


function setParticipantStatus($setStatus)
{
    if ($setStatus == 0) :
        $setStyle = '<span class="text-secondary fw-bold d-flex flex-row align-items-center"> <i class="mdi mdi-clock me-2"></i><p class="p-0 m-0">Pending </p> ';
    elseif ($setStatus == 1) :
        $setStyle = '<span class="text-success fw-bold d-flex flex-row align-items-center"> <i class="mdi mdi-check me-2"></i><p class="p-0 m-0">Approved</p> ';
    elseif ($setStatus == 2) :
        $setStyle = '<span class="text-danger fw-bold d-flex flex-row align-items-center"> <i class="mdi mdi-close me-2"></i><p class="p-0 m-0">Rejected</p> ';
    else :
    endif;
    return $setStyle;
}

function checkWeightCondition($min, $max, $value){
    if(($min <= $value) && ($value <= $max)) :
        $result = true;
    else:
        $result = false;
    endif;
    return $result;
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


// GLOBAL
function longText($text, $count)
{
    $print = "";
    $print = (strlen($text) > $count) ? substr($text, 0, $count) . '...' : $text;
    // $print = strlen($text) > $count ? substr($text, 0, 50) . "..." : $text;
    return $print;
}
