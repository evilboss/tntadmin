<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StoreFrontController extends CI_Controller
{
    /**
     * StoreController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Items_model');
        $this->load->model('Cart_model');
        $this->data['cart'] = $this->cart->contents();
        $this->data['site'] = $this->getData();
        $this->load->model('ProductsModel');
        $this->load->model('ProductImagesModel');
        $this->load->model('CategoriesModel');
        $this->load->library('pagination');

    }

    private function getData()
    {
        $this->load->model('setting');
        $settings = $this->setting->all();

        if (empty($settings)) return $settings;

        foreach ($settings as $setting) {
            $data[$setting['key']] = $setting['value'];
        }

        return $data;
    }


    /**
     * Get Configuration for pagination.
     *
     * @param $category_id required to find total records from model.
     * @param $inputs required to find total records from model.
     * @return mixed
     */
    public function getPaginationConfig($category_id, $inputs)
    {
        $config['base_url'] = base_url('shop/' . $this->uri->segment(2));
        $config['total_rows'] = $this->ProductsModel->getTotalRecordsForPagination($category_id, $inputs);
        $config['per_page'] = 9;
        $config['page_query_string'] = true;

        $config['reuse_query_string'] = true;
        $config['full_tag_open'] = '<div class="pagination flex-m flex-w p-t-26">';
        $config['full_tag_close'] = '</div>';
        $config['cur_tag_open'] = '<a class="item-pagination flex-c-m trans-0-4 active-pagination">';
        $config['cur_tag_close'] = '</a>';
        $config['attributes'] = array('class' => 'item-pagination flex-c-m trans-0-4');
        return $config;
    }

    /**
     * Display List of Products for shopping using Category ID.
     *
     * @param null $category_id
     */

}
