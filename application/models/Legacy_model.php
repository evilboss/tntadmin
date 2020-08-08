<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Legacy_model extends TNT_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->db2 = $this->load->database('istechdb', TRUE);
    }

    function getRecords()
    {

        // Load database

        // Select records from 1st database

        // Select records from 2nd database
        //$db2 = $this->load->database('istechdb', TRUE);

        $this->db2->select('*');
        $this->db2->from('items');
        return $this->db2->get()->result();
    }

    function getProducts($ids='')
    {
        $this->db2->select('*');
        $this->db2->from('items');
        $this->db2->where_not_in('ItemCode', $ids);
        return $this->db2->get()->result();
    }

    function getQuantity()
    {

    }
}
