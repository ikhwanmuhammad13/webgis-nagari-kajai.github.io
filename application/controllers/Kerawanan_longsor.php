<?php

class Kerawanan_longsor extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Pemetaan Kerawanan Bencana Longsor',
            'isi'   => 'v_longsor'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

}

/* End of file Controllername.php */
