<?php

/**
 * Created by PhpStorm.
 * User: rajith
 * Date: 10/7/16
 * Time: 4:52 PM
 */
class Test extends CI_Model{



    function getdata(){

        $sql = "SELECT * FROM table";

        $query= $this->db->query($sql);

        return  result;


    }

}