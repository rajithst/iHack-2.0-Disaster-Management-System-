<?php

/**
 * Created by PhpStorm.
 * User: rajith
 * Date: 10/8/16
 * Time: 3:50 PM
 */
class Messages extends Frontend_Controller {


    /**
     * Messages constructor.
     */
    public function __construct(){

        parent::__construct();
    }





    function index(){

        $this->load->model('Messages_d');
        $data['allmsgs'] = $this->Messages_d->getall();

        $this->load->view('admin/messages',$data);

    }
}