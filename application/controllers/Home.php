<?php 
/**
* main class for starting page
*/
class Home extends Frontend_Controller{
    
    function __construct(){
        parent::__construct();
    }

    public function index(){

        $this->load->library('googlemaps');
        $config['center'] = '7.8731, 80.7718';
        $config['zoom'] = 'auto';


        $this->googlemaps->initialize();
        $marker = array();
        $marker['position'] = '6.9271, 79.8612';
        $marker['infowindow_content'] = 'Colombo';
        $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
        $this->googlemaps->add_marker($marker);

        $marker = array();
        $marker['position'] = '7.2513, 80.3464';
        $marker['draggable'] = TRUE;
        $marker['infowindow_content'] = 'Kegalle';
        $this->googlemaps->add_marker($marker);

        $marker = array();
        $marker['position'] = '7.2481, 80.4466';
        $marker['infowindow_content'] = 'Mawanelle';
        $this->googlemaps->add_marker($marker);


        $data['map']= $this->googlemaps->create_map();
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