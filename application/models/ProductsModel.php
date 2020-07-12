<?php

class ProductsModel extends TNT_Model
{

    public $_table = 'products';

    /**
     * ProductsModel constructor.
     */
    public function __construct()
    {
        //$this->has_one['image'] = array('foreign_model'=>'ProductsModel','foreign_table'=>'product_images','foreign_key'=>'product_id','local_key'=>'id');

        parent::__construct();
        $this->load->model('CategoriesModel');

    }

    public function getProductsForShop($category, $inputs, $limit, $offset)
    {


        $products = $this->buildQuery($category, $inputs, $limit, $offset);

        //$images = $this->getImagesForProducts($products);

        return $products;
    }

    public function getTotalRecordsForPagination($category, $inputs)
    {
        return count($this->buildQuery($category, $inputs));
    }

    public function buildQuery($category, $inputs, $limit = null, $offset = 0)
    {

        $this->db->select('products.*');

        $this->db->from($this->_table);
        if ($category) {
            $this->db->where('category_id', $category);
        }

        if (isset($inputs['min_price']) && $inputs['min_price']) {
            $this->db->where('products.price >=', $inputs['min_price']);

        }

        if (isset($inputs['max_price']) && $inputs['max_price']) {
            $this->db->where('products.price <=', $inputs['max_price']);

        }

        if (isset($inputs['search_str']) && $inputs['search_str']) {
            $this->db->where('products.name LIKE', "%$inputs[search_str]%");
        }

        if (isset($inputs['sort_type']) && $inputs['sort_type']) {
            $this->db->order_by('products.price', $inputs['sort_type']);
        }

        $this->db->where('products.webItem', 1);
        $this->db->join('product_images', 'products.id = product_images.product_id', 'left');
        $this->db->group_by('products.id');


        //echo ($limit); exit();
        if ($limit) {
            $this->db->limit($limit, $offset);
        }


        return $this->db->get()->result();
    }

    /**
     * @return mixed
     */
    public function countActive()
    {
        $this->db->select("$this->_table.id");
        $this->db->from($this->_table);
        $this->db->where("webItem", "1");
        $query = $this->db->get();
        return $query->num_rows();

    }

    private function getItemStatus($item)
    {
        $date_now = date("Y/m/d");
        $status = "";
        if ($item->arrivalDate > 0 && $item->releaseDate > 0) {
            $status = 'In-Stock';
            if ($item->qty <= 5) {
                $status = 'Low-Stock';
            } elseif ($item->qty = 0) {
                $status = 'Out-Of-Stock';

            }
        } elseif ($date_now <= date_format(date_create($item->preOrderEnd), 'Y/m/d')) {
            $status = 'Pre-Order';
        } elseif
        ($item->preOrderEnd > 0 && $date_now >= date_format(date_create($item->preOrderEnd), 'Y/m/d')) {
            $status = 'Coming-Soon';

        }


        return $status;
    }

    public function checkIfNew($date)
    {
        return (strtotime(date_format(date_create($date), 'Y/m/d')) > strtotime('-7 day'));
    }


    public function getFormattedItems($products)
    {
        foreach ($products as $product) {
            $product->cls = 0;
            $product->status = $this->getItemStatus($product);
            $product->brandName = isset($product->brandId) ? $this->CategoriesModel->get($product->brandId)->name : false;
            $product->categoryName = isset($product->category_id) ? $this->CategoriesModel->get($product->category_id)->name : false;
            $product->productTypeName = isset($product->productTypeId) ? $this->CategoriesModel->get($product->productTypeId)->name : false;
            $product->manufacturerName = isset($product->manufacturerId) ? $this->CategoriesModel->get($product->manufacturerId)->name : false;
            $product->isNew = $this->checkIfNew($product->created_at);

        }
        return $products;
    }

    public
    function cleanSpecialOffers($products)
    {
        $date_now = date("Y/m/d"); // this format is string comparable
        // print_r($products);
        $filteredProducts = [];
        foreach ($products as $product) {
            if ($product->spStartDate > 0) {
                if (date_format(date_create($product->spStartDate), 'Y/m/d') <= $date_now && date_format(date_create($product->spEndDate), 'Y/m/d') >= $date_now && $product->spPrice != 0) {
                    array_push($filteredProducts, $product);

                }


            }


        }
        return $filteredProducts;
    }

}
