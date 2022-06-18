<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Webgis extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'WebGIS Nagari Kajai',
            'isi'   => 'v_webgis'
        );
        $this->load->view('front-end/v_wrapper', $data, FALSE);
    }

    
    public function webgis2()
    {
        $data = array(
            'title' => 'WebGIS Nagari Kajai',
            'isi'   => 'v_webgis2'
        );
        $this->load->view('front-end/v_wrapper', $data, FALSE);
    }

    public function webgis3()
    {
        $data = array(
            'title' => 'WebGIS Nagari Kajai',
            'isi'   => 'v_webgis3'
        );
        $this->load->view('front-end/v_wrapper', $data, FALSE);
    }

    public function webgis4()
    {
        $data = array(
            'title' => 'WebGIS Nagari Kajai',
            'isi'   => 'v_webgis4'
        );
        $this->load->view('front-end/v_wrapper', $data, FALSE);
    }

    public function webgis5()
    {
        $data = array(
            'title' => 'WebGIS Nagari Kajai',
            'isi'   => 'v_webgis5'
        );
        $this->load->view('front-end/v_wrapper', $data, FALSE);
    }

    
    public function webgis6()
    {
        $data = array(
            'title' => 'WebGIS Nagari Kajai',
            'isi'   => 'v_webgis6'
        );
        $this->load->view('front-end/v_wrapper', $data, FALSE);
    }



}

/* End of file Webgis.php */
