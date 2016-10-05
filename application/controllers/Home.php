<?php 
/**
* main class for starting page
*/
class Home extends Frontend_Controller{
    
    function __construct(){
        parent::__construct();
    }

    public function index(){

        $this->load->view('home');

    }

    /**
     * @return object
     */
    public function registration()
    {
        return $this->load->view('registration');
    }



}

 ?>