<?php 
/**
* main class for starting page
*/
class Home extends Frontend_Controller{
    
    function __construct(){
        parent::__construct();
    }

    public function index(){

        $this->load->model('Post_d');
        $data['postdata']=$this->Post_d->viewall();
        $this->load->view('home',$data);

    }

    /**
     * @return object
     */
    public function registration()
    {
        return $this->load->view('registration');
    }

    /**
     * @return object
     */
    public function report()
    {
        return $this->load->view('report');
    }

    public function getall()
    {
        $this->load->modal('Test');

        $result = $this->Test->getdata();
        $this->load->view('home',$this->result);

    }







}

 ?>