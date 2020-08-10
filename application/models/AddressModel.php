<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class AddressModel extends TNT_Model
{
    protected $table = 'addresses';

    public function __construct()
    {
        //$this->load->database();
    }

    public function insertAddress($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function getAddressByUserId($userId)
    {
        return $this->db->where('userId', $userId)->get($this->table)->result();
    }


}
