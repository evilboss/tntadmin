<?php

class DealsModel extends TNT_Model
{

    public $_table = 'deals';

    public function getDeals()
    {

        $this->db->select("$this->_table.*");
        $result = $this->db->get();
        return $result;

    }
}
