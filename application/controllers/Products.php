<?php

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('ProductsModel');
        $this->load->model('Legacy_model');


        $this->load->library('pagination');
        $this->load->helper('admin');


    }

    public function index()
    {

        $pagination_config = getAdminPaginationConfig($this->ProductsModel->count_all(), 10);
        $this->pagination->initialize($pagination_config);
        echo "<pre>";

        print_r(

            $this->ProductsModel->
            getFormattedItems($this->ProductsModel->order_by('created_at', 'desc')->
            limit($pagination_config['per_page'], $this->input->get('per_page'))->get_many_by('webItem', '1')));
        echo "</pre>";

    }

    /*TODO: display items to home page*/
    public function getSpecialOffers()
    {
        $date_now = date("Y/m/d"); // this format is string comparable
        $pagination_config = getAdminPaginationConfig($this->ProductsModel->count_all(), 10);
        $this->pagination->initialize($pagination_config);

        $this->ProductsModel->
        cleanSpecialOffers($this->ProductsModel->
        getFormattedItems($this->ProductsModel->
        order_by('created_at', 'desc')->
        limit($pagination_config['per_page'], $this->input->
        get('per_page'))->
        get_many_by('webItem', '1')
        ));


    }

    public function getLegacy()
    {
        echo "legacy";
        echo "<pre>";

        print_r($this->Legacy_model->getProducts($this->ProductsModel->getAllProductCodes()));
    }

}
