<?php
class Dashboard extends Admin_Controller{


    /**
     * Dashboard constructor.
     */
    public function __construct(){

        parent::__construct();
    }

    /**
     * @return object
     */
    public function index()
    {
         $this->load->view('admin/index');
    }






}