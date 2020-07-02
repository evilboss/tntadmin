<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TNT_Controller extends CI_Controller
{

    public $data = array();

    public function __construct()
    {

        parent::__construct();

        $this->load->library('ion_auth');
        $this->load->helper('inflector');
        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }

        $this->data['site'] = $this->getData();

        $this->data['add_js'] = [];
        $this->data['add_css'] = [];
        $this->data['active_user'] = $this->ion_auth->user()->row();

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