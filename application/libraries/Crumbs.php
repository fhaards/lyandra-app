<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Crumbs
{
    private $breadcrumbs = array();
    private $separator = ' <li class="me-2"> / </li>';
    private $start = '<ol id="breadcrumb" class="breadcrumb flex flex-row text-xs font-semibold text-gray-500 px-3 rounded mt-0 mb-3">';
    private $end = '</ol>';

    public function __construct($params = array())
    {
        if (count($params) > 0) {
            $this->initialize($params);
        }
    }

    private function initialize($params = array())
    {
        if (count($params) > 0) {
            foreach ($params as $key => $val) {
                if (isset($this->{'_' . $key})) {
                    $this->{'_' . $key} = $val;
                }
            }
        }
    }

    function add($title, $href)
    {
        if (!$title or !$href)
            return;

        $this->breadcrumbs[] = array(
            'title' => $title,
            'href' => $href
        );
    }

    function output()
    {
        if ($this->breadcrumbs) {
            $output = $this->start;
            $output .= '<li class="me-2"><a href="' . base_url('dashboard') . '" class="breadcrumb-item btn-link text-decoration-none tracking-wide d-flex flex-row align-items-center"><i class="mdi mdi-view-dashboard-outline menu-icon me-1"></i> <span> Dashboard </span></a></li>';
            // if (isAdmin()) {
            //     $output .= '<li><a href="' . base_url() . 'dashboard" class="hover:text-gray-700 hover:underline"> Dashboard  </a></li>';
            // }
            // else {
            //     $output .= '<li><a href="' . base_url('dashboard') . '" class="hover:text-gray-700 hover:underline"> Home  </a></li>';
            // }
            $output .= $this->separator;
            foreach ($this->breadcrumbs as $key => $crumb) {
                if ($key) {
                    $output .= $this->separator;
                }
                $lastBreadcrumb = (array_keys($this->breadcrumbs));
                if (end($lastBreadcrumb) == $key) {
                    $output .= '<li class="text-green-500 font-bold me-2"><span>' . $crumb['title'] . '</span><li>';
                } else {
                    $output .= '<li class="me-2"><a href="' . $crumb['href'] . '" class="btn-link text-decoration-none tracking-wide">' . $crumb['title'] . '</a><li>';
                }
            }
            return $output . $this->end . PHP_EOL;
        }
        return '';
    }
}
