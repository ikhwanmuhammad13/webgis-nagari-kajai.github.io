<?php

class Kerawanan_banjir_bandang extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Pemetaan Kerawanan Bencana Banjir Bandang',
            'isi'   => 'v_banjir_bandang'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

}

/* End of file Controllername.php */
