<?php

/**
 * Created by PhpStorm.
 * User: rajith
 * Date: 10/8/16
 * Time: 2:46 PM
 */
class Report_d extends MY_Model {


    /**
     * Report_d constructor.
     */
    public function __construct(){

        parent::__construct();
    }

    public function submitreport(){

        $reportdata = array(

            'district' => $this->input->post('dname'),
            'subcity' => $this->input->post('subc'),
            'description' => $this->input->post('desc')

        );


        $res = $this->db->insert('report', $reportdata);


    }
}