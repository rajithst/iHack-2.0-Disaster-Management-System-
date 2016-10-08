<?php

/**
 * Created by PhpStorm.
 * User: rajith
 * Date: 10/8/16
 * Time: 11:04 AM
 */
class Post extends Admin_Controller {


    /**
     * Post constructor.
     */
    public function __construct(){

        parent::__construct();
    }

    /**
     * @param object $load
     */
    public function setpost()
    {

        $this->load->model('Post_d');
        $resp = $this->Post_d->postdata();

        if ($resp == true) {



        }


    }

}