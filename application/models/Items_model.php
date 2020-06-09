<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Items_model extends CI_Model
{
    protected $table = 'items';
    protected $data = array();
    protected $primary_id = 'ID';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        return $this->db->get($this->table);

    }

    public function get($id)
    {
        return $this->db->where($this->primary_id, $id)->get($this->table)->row_array();
    }
}
/* End of file '/Items_model.php' */
/* Location: ./application/models//Items_model.php */
