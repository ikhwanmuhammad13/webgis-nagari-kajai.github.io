<?php

class Kualitas_air extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Pemetaan Kualitas Air',
            'isi'   => 'v_air'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
}

/* End of file Kualitas_air.php */
