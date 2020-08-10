<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class AddressModel extends TNT_Model
{
    public $_table = 'addresses';

    public function __construct()
    {
        parent::__construct();

        //$this->load->database();
    }

    public function insertAddress($data)
    {
        $this->db->insert($this->_table, $data);
    }

    public function getAddressByUserId($userId)
    {
        return $this->db->where('userId', $userId)->get($this->_table)->result();
    }


}
