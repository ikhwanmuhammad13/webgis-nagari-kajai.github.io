<?php


class Tutupan_lahan extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Pemetaan Tutupan Lahan',
            'isi'   => 'v_tutupan_lahan_drone'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

}

/* End of file Controllername.php */
