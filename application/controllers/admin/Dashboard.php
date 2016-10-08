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


    public function newpost()
    {
        $this->load->view('admin/newpost');
    }



}