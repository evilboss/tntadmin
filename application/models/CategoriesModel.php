<?php

class CategoriesModel extends TNT_Model
{

    public $_table = 'categories';

    public function getCategoriesDropdown($type = null, $id = null)
    {
        if ($id) {
            $this->db->where('id!=', $id);
        }
        if ($type) {
            $this->db->where('type', $type);
        }
        $query = $this->db->get($this->_table);

        //echo $this->db->last_query();die();
        return $query->result_array();
    }

    public function getParentCategory($id = null, $type = null)
    {
        if ($id) {
            $this->db->where('parent_id =', $id);

        }

        if ($type) {
            $this->db->where('type', $type);
        }
        $query = $this->db->get($this->_table);

        //echo $this->db->last_query();die();
        return $query->result();
    }


}
