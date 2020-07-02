<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Items_model extends CI_Model
{
    protected $table = 'items';
    protected $data = array();
    protected $primary_id = 'ID';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
        $this->load->model('Brand_model');
    }

    public function get_all()
    {
        return $this->db->get($this->table);

    }

    public function getWebItems()
    {
        return $this->db->get_where($this->table, array('WebItem' => true, 'featured' => false, 'InActive' => false))->result_array();
    }

    public function getFeaturedItems()
    {
        $featuredItems = $this->db->get_where($this->table, array('WebItem' => true, 'featured' => true, 'InActive' => false))->result_array();
        foreach ($featuredItems as $idx => $item) {
            $featuredItems[$idx]['Category'] = $this->Category_model->getNameById($item['Category']);
            $featuredItems[$idx]['Brand'] = $this->Brand_model->getNameById($item['Brand']);

        }

        return $featuredItems;
    }

    public function get($id)
    {
        return $this->db->where($this->primary_id, $id)->get($this->table)->row_array();
    }
}
/* End of file '/Items_model.php' */
/* Location: ./application/models//Items_model.php */
