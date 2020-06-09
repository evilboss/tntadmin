<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Books_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        return $this->db->get("books");
    }
}
/* End of file '/Books_model.php' */
/* Location: ./application/models//Books.php_model */
