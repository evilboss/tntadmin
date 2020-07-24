<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Shop extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Items_model');
        $this->load->model('Cart_model');
        $this->load->model('ProductsModel');
        $this->load->model('ProductImagesModel');
        $this->load->model('CategoriesModel');
        $this->load->model('SliderImagesModel');
        $this->load->library(array('ion_auth', 'form_validation', 'pagination'));
        $this->load->helper('admin');

        $this->data['cart'] = $this->cart;
        $this->data['site'] = $this->getData();
        $this->data['slides'] = $this->SliderImagesModel->get_all();

        $this->data['add_js'] = [];
        $this->data['add_css'] = [];
    }

    public function index()
    {
        //  $this->load->model('shop_model');
        //  $this->data['shop'] = $this->shop_model->get_all();
        $category_id = '';
        $inputs = $this->input->get();
        $pagination_config = $this->getPaginationConfig($category_id, $inputs);
        $this->pagination->initialize($pagination_config);
        $current_per_page = $this->input->get('per_page') or 0;
        $limit = $pagination_config['per_page'];
        $offset = $current_per_page;
        $this->data['content'] = 'shop/home';
        $this->data['items'] = $this->Items_model->getWebItems();
        //$this->data['featuredItems'] = $this->Items_model->getFeaturedItems();
        $this->data['featuredItems'] = $this->ProductsModel->getFormattedItems($this->ProductsModel->getProductsForShop($category_id, $inputs, $limit, $offset));
        // print_r($this->Items_model->getFeaturedItems());
        $this->load->view('layout/store', $this->data);
    }

    public function newProducts()
    {
        //  $this->load->model('shop_model');
        //  $this->data['shop'] = $this->shop_model->get_all();
        $category_id = '';
        $inputs = $this->input->get();
        $pagination_config = $this->getPaginationConfig($category_id, $inputs);
        $this->pagination->initialize($pagination_config);
        $current_per_page = $this->input->get('per_page') or 0;
        $limit = $pagination_config['per_page'];
        $offset = $current_per_page;
        $this->data['content'] = 'shop/home';
        $this->data['items'] = $this->Items_model->getWebItems();
        //$this->data['featuredItems'] = $this->Items_model->getFeaturedItems();
        $this->data['featuredItems'] = $this->ProductsModel->getFormattedItems($this->ProductsModel->getProductsForShop($category_id, $inputs, $limit, $offset));


        // print_r($this->Items_model->getFeaturedItems());
        $this->load->view('layout/store', $this->data);
    }

    public function featured()
    {
        //  $this->load->model('shop_model');
        //  $this->data['shop'] = $this->shop_model->get_all();
        $category_id = '';
        $inputs = $this->input->get();
        $pagination_config = $this->getPaginationConfig($category_id, $inputs);
        $this->pagination->initialize($pagination_config);
        $current_per_page = $this->input->get('per_page') or 0;
        $limit = $pagination_config['per_page'];
        $offset = $current_per_page;
        $this->data['content'] = 'shop/home';
        $this->data['items'] = $this->Items_model->getWebItems();
        //$this->data['featuredItems'] = $this->Items_model->getFeaturedItems();
        $this->data['featuredItems'] = $this->ProductsModel->getFormattedItems($this->ProductsModel->getProductsForShop($category_id, $inputs, $limit, $offset));


        // print_r($this->Items_model->getFeaturedItems());
        $this->load->view('layout/store', $this->data);
    }

    public function comingSoon()
    {
        //  $this->load->model('shop_model');
        //  $this->data['shop'] = $this->shop_model->get_all();
        $category_id = '';
        $inputs = $this->input->get();
        $pagination_config = $this->getPaginationConfig($category_id, $inputs);
        $this->pagination->initialize($pagination_config);
        $current_per_page = $this->input->get('per_page') or 0;
        $limit = $pagination_config['per_page'];
        $offset = $current_per_page;
        $this->data['content'] = 'shop/home';
        $this->data['items'] = $this->Items_model->getWebItems();
        //$this->data['featuredItems'] = $this->Items_model->getFeaturedItems();
        $this->data['featuredItems'] = $this->ProductsModel->getFormattedItems($this->ProductsModel->getProductsForShop($category_id, $inputs, $limit, $offset));


        // print_r($this->Items_model->getFeaturedItems());
        $this->load->view('layout/store', $this->data);
    }

    public function preorders()
    {
        //  $this->load->model('shop_model');
        //  $this->data['shop'] = $this->shop_model->get_all();
        $category_id = '';
        $inputs = $this->input->get();
        $pagination_config = $this->getPaginationConfig($category_id, $inputs);
        $this->pagination->initialize($pagination_config);
        $current_per_page = $this->input->get('per_page') or 0;
        $limit = $pagination_config['per_page'];
        $offset = $current_per_page;
        $this->data['content'] = 'shop/home';
        $this->data['items'] = $this->Items_model->getWebItems();
        //$this->data['featuredItems'] = $this->Items_model->getFeaturedItems();
        $this->data['featuredItems'] = $this->ProductsModel->getFormattedItems($this->ProductsModel->getProductsForShop($category_id, $inputs, $limit, $offset));


        // print_r($this->Items_model->getFeaturedItems());
        $this->load->view('layout/store', $this->data);
    }

    public function products()
    {

        /*
         * 				$id = $product['serial'];
				$name = $product['name'];
				$description = $product['description'];
				$price = $product['price'];
*/
        $pagination_config = getAdminPaginationConfig($this->ProductsModel->count_all(), 10);
        $this->pagination->initialize($pagination_config);
        $this->data['total_rows'] = $pagination_config['total_rows'];

        $this->data['categories'] = $this->CategoriesModel->getParentCategory('category');


        $this->data['products'] = $this->ProductsModel->getFormattedItems($this->ProductsModel->order_by('created_at', 'desc')->limit($pagination_config['per_page'], $this->input->get('per_page'))->get_many_by('webItem', '1'));
        $this->data['content'] = 'products/list';
        $this->load->view('layout/store', $this->data);

    }

    public function categories($category_id = 0)
    {
        //Get Query string Inputs.
        $inputs = $this->input->get();
        $pagination_config = $this->getPaginationConfig($category_id, $inputs);
        $this->pagination->initialize($pagination_config);
        $current_per_page = $this->input->get('per_page') or 0;
        $limit = $pagination_config['per_page'];
        $offset = $current_per_page;
        //Get Categories
        $this->data['category'] = $this->CategoriesModel->get($category_id);
        $this->data['genres'] = $this->CategoriesModel->getParentCategory($category_id, 'category');
        $this->data['brands'] = $this->CategoriesModel->getParentCategory($category_id, 'brand');
        $this->data['manufacturers'] = $this->CategoriesModel->getParentCategory($category_id, 'manufacturer');
        $this->data['productTypes'] = $this->CategoriesModel->getParentCategory($category_id, 'productType');

        //

        $this->data['total_rows'] = $pagination_config['total_rows'];
        $this->data['products'] = $this->ProductsModel->
        getFormattedItems($this->ProductsModel->getProductsForShop($category_id, $inputs, $limit, $offset));
        //Get Product Images :
        //$this->ProductImagesModel->getImageLookupProducts($products);


        $this->data['content'] = 'categories/list';
        echo $category_id;
        $this->load->view('layout/store', $this->data);

        ///$this->load->template('shop/list', $data);
    }

    public function brands($category_id = null)
    {
        //Get Query string Inputs.
        $inputs = $this->input->get();
        $pagination_config = $this->getPaginationConfig($category_id, $inputs);
        $this->pagination->initialize($pagination_config);
        $current_per_page = $this->input->get('per_page') or 0;
        $limit = $pagination_config['per_page'];
        $offset = $current_per_page;
        //Get Categories
        $this->data['brands'] = $this->CategoriesModel->getParentCategory($category_id, 'brand');

        //

        $this->data['total_rows'] = $pagination_config['total_rows'];
        $this->data['products'] = $this->ProductsModel->
        getFormattedItems($this->ProductsModel->getProductsForShop($category_id, $inputs, $limit, $offset));
        //Get Product Images :
        //$this->ProductImagesModel->getImageLookupProducts($products);


        $this->data['content'] = 'categories/list';
        $this->load->view('layout/store', $this->data);

        ///$this->load->template('shop/list', $data);
    }

    public function manufacturers($category_id = 0)
    {
        //Get Query string Inputs.
        $inputs = $this->input->get();
        $pagination_config = $this->getPaginationConfig($category_id, $inputs);
        $this->pagination->initialize($pagination_config);
        $current_per_page = $this->input->get('per_page') or 0;
        $limit = $pagination_config['per_page'];
        $offset = $current_per_page;
        //Get manufacturers
        $this->data['manufacturers'] = $this->CategoriesModel->getParentCategory($category_id, 'manufacturer');

        //

        $this->data['total_rows'] = $pagination_config['total_rows'];
        $this->data['products'] = $this->ProductsModel->
        getFormattedItems($this->ProductsModel->getProductsForShop($category_id, $inputs, $limit, $offset));
        //Get Product Images :
        //$this->ProductImagesModel->getImageLookupProducts($products);


        $this->data['content'] = 'categories/list';
        $this->load->view('layout/store', $this->data);

        ///$this->load->template('shop/list', $data);
    }

    public function producttypes($category_id = 0)
    {
        //Get Query string Inputs.
        $inputs = $this->input->get();
        $pagination_config = $this->getPaginationConfig($category_id, $inputs);
        $this->pagination->initialize($pagination_config);
        $current_per_page = $this->input->get('per_page') or 0;
        $limit = $pagination_config['per_page'];
        $offset = $current_per_page;
        //Get Categories
        $this->data['productTypes'] = $this->CategoriesModel->getParentCategory($category_id, 'productType');

        //

        $this->data['total_rows'] = $pagination_config['total_rows'];
        $this->data['products'] = $this->ProductsModel->
        getFormattedItems($this->ProductsModel->getProductsForShop($category_id, $inputs, $limit, $offset));
        //Get Product Images :
        //$this->ProductImagesModel->getImageLookupProducts($products);


        $this->data['content'] = 'categories/list';
        $this->load->view('layout/store', $this->data);

        ///$this->load->template('shop/list', $data);
    }

    public function genres($category_id = 0)
    {
        //Get Query string Inputs.
        $inputs = $this->input->get();
        $pagination_config = $this->getPaginationConfig($category_id, $inputs);
        $this->pagination->initialize($pagination_config);
        $current_per_page = $this->input->get('per_page') or 0;
        $limit = $pagination_config['per_page'];
        $offset = $current_per_page;
        //Get genres
        $this->data['genres'] = $this->CategoriesModel->getParentCategory($category_id, 'category');

        //

        $this->data['total_rows'] = $pagination_config['total_rows'];
        $this->data['products'] = $this->ProductsModel->
        getFormattedItems($this->ProductsModel->getProductsForShop($category_id, $inputs, $limit, $offset));
        //Get Product Images :
        //$this->ProductImagesModel->getImageLookupProducts($products);


        $this->data['content'] = 'categories/list';
        $this->load->view('layout/store', $this->data);

        ///$this->load->template('shop/list', $data);
    }

    public function item($slug = '')
    {
        $this->data['content'] = 'shop/productDetail';
        $this->load->view('layout/store', $this->data);

    }

    public function get($id)
    {
        $id = intval($id);
        if ($id != 0) {
            $this->load->model('shop_model');
            $data['content'] = $this->shop_model->get($id);
            $this->load->view('shop_view', $data);
        } else {
            redirect(site_url(), 'refresh');
        }
    }

    public function add()
    {
        $this->form_validation->set_rules('element', 'Element label', 'trim|required');
        if ($this->form_validation->run() === FALSE) {
            $data['input_element'] = array('name' => 'element', 'id' => 'element', 'value' => set_value('element'));
            $this->load->view('shop_view', $data);
        } else {
            $field = $this->input->post('element');
            $this->load->model('shop_model');
            if ($this->shop_model->add(array('field_name' => $field))) {
                $this->load->view('shop_success_page_view');
            } else {
                $this->load->view('shop_error_page_view');
            }
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('element', 'Element label', 'trim|required');
        $this->form_validation->set_rules('id', 'ID', 'trim|is_natural_no_zero|required');
        if ($this->form_validation->run() === FALSE) {
            if (!$this->input->post()) {
                $id = intval($this->uri->segment($this->uri->total_segments()));
            } else {
                $id = set_value('id');
            }
            $data['input_element'] = array('name' => 'element', 'id' => 'element', 'value' => set_value('element'));
            $data['hidden'] = array('id' => set_value('id', $id));
            $this->load->view('shop_view', $data);
        } else {
            $element = $this->input->post('element');
            $id = $this->input->post('id');
            $this->load->model('shop_model');
            if ($this->shop_model->update(array('element' => $element), array('id' => $id))) {
                $this->load->view('shop_success_page_view', $data);
            } else {
                $this->load->view('shop_error_page_view');
            }
        }
    }

    public function delete($id)
    {
        $id = intval($id);
        if ($id != 0) {
            $this->load->model('shop_model');
            $data['content'] = $this->shop_model->delete();
            $this->load->view('shop_view', $data);
        } else {
            redirect(site_url(), 'refresh');
        }
    }

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

    public function login()
    {
        if ($this->ion_auth->logged_in()) {
            redirect('admin');
        }

        $this->data['title'] = $this->lang->line('login_heading');

        //validate form input
        $this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
        $this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');

        if ($this->form_validation->run() == true) {
            $remember = (bool)$this->input->post('remember');
            if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)) {
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect('admin');
            } else {
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect('login');
            }
        } else {
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            $this->data['identity'] = array('name' => 'identity',
                'id' => 'identity',
                'type' => 'text',
                'value' => $this->form_validation->set_value('identity'),
            );
            $this->data['password'] = array('name' => 'password',
                'id' => 'password',
                'type' => 'password',
            );

            $this->data['content'] = 'auth/login';
            $this->load->view('layout/store', $this->data);

        }
    }

    public function logout()
    {
        $this->data['title'] = "Logout";
        if ($this->ion_auth->logout()) {
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect('shop/login');
        } else {
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect('shop/login');
        }

    }


}
/* End of file '/Shop.php' */
/* Location: ./application/controllers//Shop.php */
