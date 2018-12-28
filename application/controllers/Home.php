<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('home/index');
    }

    public function json_dgview() {
        $this->load->library("paw_table");
        $columns = array('nm_kec', 'nm_kel', 'nm_lengkap', 'nik','kelamin',);
        $table = " (
            SELECT 
                r_id_kec.nama AS nm_kec,
                r_id_kel.nama AS nm_kel,
                r_dpt_pml.nama AS nm_lengkap,
                r_dpt_pml.nik,
                CASE
                    WHEN r_dpt_pml.kelamin = 'L' THEN 'Laki-Laki'
                    ELSE 'Perempuan'
                END AS kelamin
            FROM
                r_dpt_pml
                    JOIN
                r_id_kec ON r_id_kec.id_kec = r_dpt_pml.id_kec
                    JOIN
                r_id_kel ON r_id_kel.id_kel = r_dpt_pml.id_kel
            ) AS a ";
        $index = "nik";
        $output = $this->paw_table->output($columns, $table, $index);
        echo $output;
    }

}
