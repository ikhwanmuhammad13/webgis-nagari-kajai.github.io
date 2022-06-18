<?php

class Kerawanan_gempa extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Pemetaan Kerawanan Bencana Gempa',
            'isi'   => 'v_gempa'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
}

/* End of file Controllername.php */
