<?php

/**
 * Created by PhpStorm.
 * User: rajith
 * Date: 10/8/16
 * Time: 11:06 AM
 */
class Post_d extends MY_Model {


    /**
     * Post_d constructor.
     */
    public function __construct(){

        parent::__construct();
    }

    /**
     * @param string $table_name
     */
    public function postdata(){
        $date       = date("Y/m/d");
        $pdata = array(


            'subjects' =>$this->input->post('subject'),
            'content' =>$this->input->post('content'),
            'path' =>$this->input->post('content'),
            'date'   =>   $date

        );



        $res = $this->db->insert('posts', $pdata);


    }

    public function viewall(){

        $sql = "SELECT * FROM posts ORDER BY id DESC;";
        $query = $this->db->query($sql);
        return $query->result();



    }




}