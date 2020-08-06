<?php

class AdminShippingController extends TNT_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->config->load('zones');

    }

    public function index()
    {
        $this->data['zones'] = $this->config->item('zones');
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $list = array (
                array('aaa', 'bbb', 'ccc', 'dddd'),
                array('123', '456', '789'),
                array('"aaa"', '"bbb"')
            );

            $fp = fopen('file.csv', 'w');

            foreach ($list as $fields) {
                fputcsv($fp, $fields);
            }

            fclose($fp);
        }

        $this->load->templateAdmin('admin/shipping/index', $this->data);

    }

}
