<?php

class DealsModel extends TNT_Model {

    public $_table = 'deals';

    public function getDeals() {

        $this->db->select("$this->_table.*");
        $this->db->from($this->_table);

        $result = $this->db->get();
        return $result;

    }

    public function getOne() {
        $this->db->select("$this->_table.*");
        $this->db->from($this->_table);
        $this->db->where('enabled', 1);
        return $this->db->get()->row();

    }
}
