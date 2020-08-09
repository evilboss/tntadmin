<?php

class ProductImagesModel extends TNT_Model
{

    protected $_table = 'product_images';

    /**
     *
     * @param $product_id
     * @return mixed
     */
    public function getByProductId($product_id)
    {
        $this->db->select('*');
        $this->db->from('product_images');
        $this->db->where('product_id', $product_id);
        $query = $this->db->get();
        return $query->result();

    }

    public function getSlides($product_id)
    {
        $this->db->select('*');
        $this->db->from('product_images');

        $this->db->where('product_id', $product_id);
        $this->db->where('type', 'slide');

        $query = $this->db->get();
        return $query->result();

    }

    public function getCoverImage($product_id)
    {
        $this->db->select('*');
        $this->db->from('product_images');
        $this->db->where('product_id', $product_id);
        $this->db->where('type', 'display');

        $query = $this->db->get();
        return $query->row()->path;


    }

    public function getBanner($product_id)
    {
        $this->db->select('*');
        $this->db->from('product_images');
        $this->db->where('product_id', $product_id);
        $this->db->where('type', 'banner');

        $query = $this->db->get();
        return $query->row()->path;

    }

    public function getThumbNail($product_id)
    {
        $this->db->select('*');
        $this->db->from('product_images');
        $this->db->where('product_id', $product_id);
        $this->db->where('type', 'thumbnail');

        $query = $this->db->get();
        return $query->row()->path;

    }

    public function getImagesForProducts($products)
    {
        $result = array();
        if (empty($products)) {
            return $result;
        }

        foreach ($products as $product) {
            $product_ids[] = $product->id;
        }
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where_in('product_id', $product_ids);
        $result = $this->db->get()->result();

        return $result;
    }

}
