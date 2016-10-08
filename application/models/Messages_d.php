<?php

/**
 * Created by PhpStorm.
 * User: rajith
 * Date: 10/8/16
 * Time: 3:51 PM
 */
class Messages_d extends MY_Model {


    /**
     * Messages_d constructor.
     */
    public function __construct(){
        parent::__construct();
    }


    public function getall(){

        $sql = "SELECT * FROM report ORDER BY id DESC ";
        $query = $this->db->query($sql);
        return $query->result();

    }
}