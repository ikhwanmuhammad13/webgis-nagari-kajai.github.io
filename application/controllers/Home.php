<?php

class Home extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Pemetaan Intepretasi Citra Satelit',
            'isi'   => 'v_pemetaan_intepretasi'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

}


/* End of file Controllername.php */
