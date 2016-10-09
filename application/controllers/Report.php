<?php

/**
 * Created by PhpStorm.
 * User: rajith
 * Date: 10/8/16
 * Time: 2:45 PM
 */
class Report extends Frontend_Controller {



    /**
     * Report constructor.
     */
    public function __construct(){

        parent::__construct();
    }


    function setreport(){
        $this->load->model('Report_d');
        $this->Report_d->submitreport();
        $this->load->view('report');


    }
}