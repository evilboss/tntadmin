<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminCategoriesController extends TNT_Controller
{
    /**
     * AdminCategoriesController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        /*if(!$this->session->logged_in){
            redirect(base_url('index.php/login'));
            exit;
        }*/

        $this->load->model('ProductsModel');
        $this->load->model('CategoriesModel');

    }

    /**
     * Display the list of resource.
     */
    public function index()
    {
        $this->data['records'] = $this->CategoriesModel->order_by('created_at', 'desc')->get_all();

        $this->load->templateAdmin('admin/categories/list', $this->data);
    }

    /**
     * Display the list of resource.
     */
    public function brand()
    {
        $this->data['records'] = $this->CategoriesModel->order_by('created_at', 'desc')->get_all();
        $this->data['type'] = "brand";

        $this->load->templateAdmin('admin/categories/list', $this->data);
    }

    /**
     * Create New Resource
     */
    public function create()
    {

        $this->data['categories'] = $this->CategoriesModel->getCategoriesDropdown();
        //If POST method Create New Record
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $inputs = $this->input->post();
            //print_r($inputs);
            $this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[128]');

            if ($this->form_validation->run()) {

                //Form validation success. Insert Record into database

                $upload_data = $this->uploadFile('cover_image', $this->getUploadConfig());

                $inputs['cover_image'] = $upload_data['file_name'];
                $last_id = $this->CategoriesModel->insert($inputs);


                $this->session->set_flashdata('success', 'Category Created successfully');

                redirect(base_url('admin/categories'));
                exit;
            }
        }

        $this->load->templateAdmin('admin/categories/create', $this->data);
    }

    /**
     * Create New Resource
     */
    public function createBrand()
    {

        $this->data['categories'] = $this->CategoriesModel->getCategoriesDropdown();
        //If POST method Create New Record
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $inputs = $this->input->post();
            //print_r($inputs);
            $this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[128]');

            if ($this->form_validation->run()) {

                //Form validation success. Insert Record into database

                $upload_data = $this->uploadFile('cover_image', $this->getUploadConfig());

                $inputs['cover_image'] = $upload_data['file_name'];
                $last_id = $this->CategoriesModel->insert($inputs);


                $this->session->set_flashdata('success', 'Category Created successfully');

                redirect(base_url('admin/brand'));
                exit;
            }
        }

        $this->data['type'] = "brand";

        $this->load->templateAdmin('admin/categories/create', $this->data);
    }

    /**
     * Show form for editing the resource Resource as well as update the database if HTTP verb is POST.
     *
     * @param $id
     */
    public function editBrand($id)
    {


        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[128]');

            if ($this->form_validation->run()) {
                //Form validation success. Update Record
                $inputs = $this->input->post();
                $this->CategoriesModel->update($id, $inputs);
                $this->session->set_flashdata('success', 'Product Updated successfully');

                redirect(base_url('index.php/admin/categories'));
                exit;
            }
        }
        $record = $this->CategoriesModel->get($id);
        $this->data['record'] = $record;
        $this->data['categories'] = $this->CategoriesModel->getCategoriesDropdown($id);
        $this->data['type'] = "brand";
        $this->load->templateAdmin('admin/categories/edit', $this->data);
    }

    /**
     * Show form for editing the resource Resource as well as update the database if HTTP verb is POST.
     *
     * @param $id
     */
    public function edit($id)
    {


        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[128]');

            if ($this->form_validation->run()) {
                //Form validation success. Update Record
                $inputs = $this->input->post();
                $this->CategoriesModel->update($id, $inputs);
                $this->session->set_flashdata('success', 'Product Updated successfully');

                redirect(base_url('index.php/admin/categories'));
                exit;
            }
        }
        $record = $this->CategoriesModel->get($id);

        $this->data['record'] = $record;
        $this->data['categories'] = $this->CategoriesModel->getCategoriesDropdown($id);

        $this->load->templateAdmin('admin/categories/edit', $this->data);
    }

    public function delete($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $status = $this->CategoriesModel->delete($id);
            if ($status) {
                $this->session->set_flashdata('info', 'Category deleted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to delete Category.');
            }

            redirect(redirect($_SERVER['HTTP_REFERER']));
        }

    }

    public function getUploadConfig()
    {
        $config = array();
        $config['upload_path'] = 'images/categories';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 10000000;

        return $config;
    }

    /**
     * Upload a single file
     *
     * @param $name_field
     * @param array $config
     * @return bool
     */
    public function uploadFile($name_field, $config = array())
    {
        if (empty($config)) {
            $config = array();
            $config['upload_path'] = 'images/products';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 10000000;
        }


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($name_field)) {
            $this->form_validation->set_message($name_field, $this->upload->display_errors());
            return false;
        }

        return $this->upload->data();
    }


    /**
     * Create thumbnail of image using upload_data
     *
     * @param array $upload_data CI upload data array
     * @param array $config resize config array
     * @return bool
     */
    public function createThumb($upload_data, $config = array())
    {

        if (empty($config)) {

            $config['image_library'] = 'gd2';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 800;
            $config['height'] = 600;
        }


        $config['source_image'] = product_images_path($upload_data['file_name']);
        $this->load->library('image_lib', $config);

        return $this->image_lib->resize();
    }
}
