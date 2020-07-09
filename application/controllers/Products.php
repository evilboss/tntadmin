<?php

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('ProductsModel');

        $this->load->library('pagination');
        $this->load->helper('admin');


    }

    public function index()
    {

        echo "Product Controller";
        $pagination_config = getAdminPaginationConfig($this->ProductsModel->count_all(), 10);
        $this->pagination->initialize($pagination_config);
        print_r(

            $this->ProductsModel->
            getFormattedItems($this->ProductsModel->order_by('created_at', 'desc')->
            limit($pagination_config['per_page'], $this->input->get('per_page'))->get_many_by('webItem', '1')));
    }
}
