<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminProductsController extends TNT_Controller
{

    protected $uploaded_images = array();
    protected $cover_image;

    /**
     * AdminProductsController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        /*if (!$this->session->logged_in) {
            redirect(base_url('index.php/login'));
            exit;
        }*/
        $this->load->model('ProductsModel');
        $this->load->model('ProductImagesModel');
        $this->load->model('CategoriesModel');
        $this->load->model('Legacy_model');
        $this->load->helper('file');
        //load custom helper
        $this->load->helper('admin');
        $this->load->helper('custom');

    }


    /**
     * Display the list of resource.
     */
    public function index()
    {
        $this->load->library('pagination');
        //Call user defined helper
        $pagination_config = getAdminPaginationConfig($this->ProductsModel->count_all(), 10);
        $this->pagination->initialize($pagination_config);
        $this->data['records'] = $this->ProductsModel->order_by('created_at', 'desc')->limit($pagination_config['per_page'], $this->input->get('per_page'))->get_all();
        $this->load->templateAdmin('admin/products/list', $this->data);
    }

    /**
     * Set common validation rules for products form.
     */
    protected function setValidationRules($type = 'add')
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[128]');
        $this->form_validation->set_rules('productCode', 'Product Code', 'trim|required|max_length[128]');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        $this->form_validation->set_rules('category_id', 'category', 'trim|required');
        $this->form_validation->set_rules('weight', 'Item Weight', 'trim|required');
        $this->form_validation->set_rules('price', 'Description', 'trim|required|max_length[11]');
    }

    /**
     * Get Image/File Upload configuration.
     *
     * @return mixed
     */
    public function getUploadConfig()
    {
        $config = array();
        $config['upload_path'] = 'images/products';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 10000000;

        return $config;
    }


    /**
     * Create new resource.
     */
    public function create()
    {
        $data = array();

        //If POST method Create New Record. Otherwise just show the form.
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $inputs = $this->input->post();
            $this->setValidationRules();
            //Set one additional rule
            $this->form_validation->set_rules('callback_validateAndUploadFiles');

            if ($this->form_validation->run() == FALSE) {
                $this->data['record'] = (object)$inputs;
            } else {
                //Form validation success. Insert Record into database
                $inputs['created_at'] = date('Y-m-d H:i:s');

                //Format date
                $inputs['preOrderStart'] = (date_format(date_create($inputs['preOrderStart']), "Y/m/d H:i:s"));
                $inputs['preOrderEnd'] = (date_format(date_create($inputs['preOrderEnd']), "Y/m/d H:i:s"));

                $last_id = $this->ProductsModel->insert($inputs);

                $images = (isset($_FILES['files'])) ? $_FILES['files'] : [];
                if (!empty($images)) {
                    //print_r($images);
                    $uploadedImages = $this->upload_files('', $images);
                    foreach ($uploadedImages as $image) {
                        $type = 'slide';
                        if (strpos($image['file_name'], 'display') !== false) {
                            $type = 'display';
                        } elseif (strpos($image['file_name'], 'thumbnail') !== false) {
                            $type = 'thumbnail';

                        } elseif (strpos($image['file_name'], '1920') !== false) {
                            $type = 'banner';
                        }
                        $images_path['path'] = $image['file_name'];
                        $images_path['product_id'] = $last_id;
                        $images_path['type'] = $type;
                        $this->ProductImagesModel->insert($images_path);
                    }

                }
                $this->session->set_flashdata('success', 'Product Created successfully');


                //print_r($inputs);
                redirect(base_url('admin/products'));
                exit;

            }
        }

        $this->data['legacy'] = $this->Legacy_model->getProducts((!empty($this->ProductsModel->getAllProductCodes()) ? $this->ProductsModel->getAllProductCodes() : ''));
        $this->data['categories'] = $this->CategoriesModel->getCategoriesDropdown('category');
        $this->data['brands'] = $this->CategoriesModel->getCategoriesDropdown('brand');
        $this->data['manufacturers'] = $this->CategoriesModel->getCategoriesDropdown('manufacturer');
        $this->data['productTypes'] = $this->CategoriesModel->getCategoriesDropdown('productType');
        $this->load->templateAdmin('admin/products/create', $this->data);
    }

    /**
     * Show Edit Form. If POST request, Update the resource.
     *
     * @param $id
     */
    public function edit($id)
    {

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->setValidationRules('edit');
            //Set one additional rule for files in edit section
            if (!empty($_FILES['images']['name']) && $_FILES['images']['name'][0] != null) {
                $this->form_validation->set_rules('images[]', 'Images', 'callback_validateAndUploadFiles');
            }

            if ($this->form_validation->run()) {
                //Form validation success. Update Record
                $inputs = $this->input->post();
                $inputs['updated_at'] = date('Y-m-d H:i:s');
                $this->ProductsModel->update($id, $inputs);
                $this->session->set_flashdata('success', 'Product Updated successfully');
                $upload_dir = 'images/products';
                foreach ($this->uploaded_images as $uploaded_image) {
                    $images_path['path'] = $uploaded_image['file_name'];
                    $images_path['product_id'] = $id;
                    $this->ProductImagesModel->insert($images_path);
                }

                redirect(base_url('index.php/admin/products'));
                exit;
            }
        }
        $record = $this->ProductsModel->get($id);
        $record->images = $this->ProductImagesModel->getByProductId($id);
        $this->data['record'] = $record;
        $this->data['legacy'] = $this->Legacy_model->getProducts($this->ProductsModel->getAllProductCodes());
        $this->data['categories'] = $this->CategoriesModel->getCategoriesDropdown('category');
        $this->data['brands'] = $this->CategoriesModel->getCategoriesDropdown('brand');
        $this->data['manufacturers'] = $this->CategoriesModel->getCategoriesDropdown('manufacturer');
        $this->data['productTypes'] = $this->CategoriesModel->getCategoriesDropdown('productType');

        $this->load->templateAdmin('admin/products/edit', $this->data);
    }

    /**
     * Deletes a Resource
     *
     * @param $id
     */
    public function delete($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            //delete files from storage ..

            $images = $this->ProductImagesModel->getByProductId($id);

            foreach ($images as $image) {
                unlink('images/products/' . $image->path);
            }
            $this->ProductsModel->delete($id);


            $this->session->set_flashdata('info', 'Product deleted successfully.');
            redirect(base_url('index.php/admin/products'));
            exit;
        }

    }

    /**
     * Uploads as well as validates Product Images.
     *
     * @return bool
     */
    public function validateAndUploadFiles()
    {

        $files = $_FILES;
        $files_count = count($_FILES['images']['name']);
        //If edit and no files selected, OK.
        if ($this->uri->segment(3) == 'edit' && $files_count == 0) {
            return true;
        }


        $allowed_mime_types = array("image/jpeg", "image/png", "image/jpg");

        $upload_config = $this->getUploadConfig();
        $this->load->library('upload', $upload_config);

        for ($i = 0; $i < $files_count; $i++) {
            $_FILES['images']['name'] = $files['images']['name'][$i];
            $_FILES['images']['type'] = $files['images']['type'][$i];
            $_FILES['images']['tmp_name'] = $files['images']['tmp_name'][$i];
            $_FILES['images']['error'] = $files['images']['error'][$i];
            $_FILES['images']['size'] = $files['images']['size'][$i];

            //Don't upload images. Just check
            if ($_FILES['images']['size'] > $upload_config['max_size']) {
                //Show validation error
                $this->form_validation->set_message('validateAndUploadFiles', 'File size should not be greater than ' . $upload_config['max_size'] . ' Bytes');
                return false;
            }

            $current_mime_type = get_mime_by_extension($_FILES['images']['name']);
            if (!in_array($current_mime_type, $allowed_mime_types)) {
                $this->form_validation->set_message('validateAndUploadFiles', 'File Type is not allowed ');
                return false;
            }

            //Upload current file :
            if (!$this->upload->do_upload('images')) {
                $this->form_validation->set_message('validateAndUploadFiles', $this->upload->display_errors());
                return false;
            }
        }

        $upload_data_arr = array();
        array_push($this->uploaded_images, $this->upload->data());

        foreach ($this->uploaded_images as $upload_data) {
            $this->createThumb($upload_data);
        }
        return true;
    }

    public function fileUpload()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $inputs = $this->input->post();

            $images = (isset($_FILES['files'])) ? $_FILES['files'] : [];
            if (!empty($images)) {
                $uploadedImages = $this->upload_files('', $images);
                echo "<pre>";
                foreach ($uploadedImages as $image) {
                    $type = 'slide';
                    if (strpos($image['file_name'], 'display') !== false) {
                        $type = 'display';
                    } elseif (strpos($image['file_name'], 'thumbnail') !== false) {
                        $type = 'thumbnail';

                    } elseif (strpos($image['file_name'], '1920') !== false) {
                        $type = 'banner';
                    }
                    $images_path['path'] = $image['file_name'];
                    $images_path['product_id'] = 90;
                    $images_path['type'] = $type;
                    $this->ProductImagesModel->insert($images_path);
                }

                // print_r($images);
                echo count($uploadedImages);
                //   print_r($uploadedImages);
                echo "</pre>";
            }

        }
        $this->load->templateAdmin('admin/products/upload', $this->data);

    }

    public function deleteImage($id = 0)
    {
        $image = $this->ProductImagesModel->get($id);
        unlink('images/products/' . $image->path);
        $this->ProductImagesModel->delete($id);
        echo json_encode('ok');
    }


}
