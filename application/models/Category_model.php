<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model
{
    protected $table = 'categories';
    protected $data = array();
    protected $primary_id = 'ID';

    public function __construct()
    {
        parent::__construct();
    }

    public function getNameById($id)
    {
        return $this->db->where($this->primary_id, $id)->get($this->table)->row_array()['CategoryName'];
    }

}