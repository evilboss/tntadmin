<?php

class AdminShippingController extends TNT_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->config->load('zones');
        $this->load->model('setting');

    }

    public function index()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_FILES["csv"]["tmp_name"])) {
            if (!empty($_FILES["csv"]["tmp_name"])) {
                $shippingSettings = array();
                if (($handle = fopen($_FILES["csv"]["tmp_name"], "r")) !== FALSE) {
                    $index = 0;
                    $header = (fgetcsv($handle, 0, ","));
                    while (($row = fgetcsv($handle, 0, ",")) !== FALSE) {
                        $data = array();
                        if ($index !== 0) {
                            foreach ($row as $key => $value) {
                                $data[$header[$key]] = $value;

                            }
                            array_push($shippingSettings, (object)$data);
                        }
                        $index++;
                    }
                    fclose($handle);
                }
                $newData = array(
                    'key' => 'shipping_settings',
                    'value' => json_encode($shippingSettings)
                );
                $this->setting->updateByKey($newData);
                $this->session->set_flashdata('success', 'Successfully updated Shipping settings');
            } else {
                $this->session->set_flashdata('error', 'File template required!');

            }


        }
        $this->data['zones'] = $this->setting->getByKey('shipping_settings')['value'];
        $this->load->templateAdmin('admin/shipping/index', $this->data);

    }

}
