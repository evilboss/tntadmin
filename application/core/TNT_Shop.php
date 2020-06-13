<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TNT_Shop extends CI_Controller
{

    public $data = array();

    public function __construct()
    {

        parent::__construct();
        $this->data['site'] = $this->getData();
        $this->data['add_js'] = [];
        $this->data['add_css'] = [];

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


}