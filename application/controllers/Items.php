<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Items extends TNT_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("items_model");

    }

    public function index()
    {
        $this->data['content'] = 'items/list';
        $this->data['add_css'] = [
            '/assets/css/uploader.css'
        ];

        $this->data['add_js'] = [
            'https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js',
            'https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js',
            '/assets/js/uploader/uploader.js',
            '/assets/js/items/items.js'
        ];
        $this->load->view('layout/default', $this->data);

    }

    public function get($id)
    {
        $id = intval($id);
        if ($id != 0) {
            $this->data['content'] = 'items/list';
            $this->data['add_css'] = [
                '/assets/css/uploader.css'
            ];

            $this->data['add_js'] = [
                '/assets/js/uploader/uploader.js',
            ];
            $this->load->model('items_model');
            $this->data['item'] = $this->items_model->get($id);
            $this->data['content'] = 'items/edit';
            $this->load->view('layout/default', $this->data);
        } else {
            redirect(site_url(), 'refresh');
        }
    }

    public function add()
    {

        $data = $this->input->post();

        foreach ($data as $key => $value) {
            $_dt['key'] = $key;
            $_dt['value'] = $value;
        }
        print_r($data);
        /* if ($this->items_model->add(array('field_name' => $field))) {
             $this->load->view('items_success_page_view');
         } else {
             $this->load->view('items_error_page_view');
         }
     */
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
            $this->load->view('items_view', $data);
        } else {
            $element = $this->input->post('element');
            $id = $this->input->post('id');
            $this->load->model('items_model');
            if ($this->items_model->update(array('element' => $element), array('id' => $id))) {
                $this->load->view('items_success_page_view', $data);
            } else {
                $this->load->view('items_error_page_view');
            }
        }
    }

    public function delete($id)
    {
        $id = intval($id);
        if ($id != 0) {
            $this->load->model('items_model');
            $data['content'] = $this->items_model->delete();
            $this->load->view('items_view', $data);
        } else {
            redirect(site_url(), 'refresh');
        }
    }

    public function table()
    {

        // Datatables Variables
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
        $items = $this->items_model->get_all();

        $data = array();

        foreach ($items->result() as $row) {

            $data[] = array(
                $row->ID,
                $row->ItemCode,
                $row->Description,
                $row->PriceA,
            );
        }

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $items->num_rows(),
            "recordsFiltered" => $items->num_rows(),
            "data" => $data
        );
        echo json_encode($output);
        exit();

        /*`ID` int NOT NULL AUTO_INCREMENT,
  `ItemCode` varchar(25) DEFAULT NULL COMMENT 'Input',
  `Description` longtext NOT NULL COMMENT 'TextArea',
  `ItemWeight` varchar(15) DEFAULT NULL COMMENT 'Input',
  `Department` int NOT NULL DEFAULT '0' COMMENT 'Option|department|ID|name',
  `Category` int NOT NULL DEFAULT '0' COMMENT 'Option|category|ID|name',
  `Brand` varchar(5) DEFAULT NULL COMMENT 'Option|brand|ID|Brand',
  `InActive` int NOT NULL DEFAULT '0' COMMENT 'Input',
  `WebItem` int NOT NULL DEFAULT '0' COMMENT 'Input',
  `PriceA` double(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Input',
  `PriceB` double(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Input',
  `PriceC` double(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Input',
  `WDeposit` double(10,2) NOT NULL DEFAULT '0.00',
  `ItemCost` double(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Input',
  `Arrival_Date` varchar(20) DEFAULT NULL COMMENT 'Date',
  `Date_Arrived` varchar(10) DEFAULT NULL COMMENT 'Date',
  `SupplierActive_1` int NOT NULL DEFAULT '0',
  `Supplier1` varchar(15) NOT NULL COMMENT 'Option|supplier|ID|Supplier',
  `DateLine1` varchar(10) DEFAULT NULL COMMENT 'Date',
  `Currency1` varchar(10) DEFAULT NULL COMMENT 'Option|currency|Currency|Currency',
  `OfferedCost1` double(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Input',
  `PcsPerCarton` varchar(15) DEFAULT NULL COMMENT 'Input',
  `POQty1` int NOT NULL DEFAULT '0' COMMENT 'Input',
  `SupplierActive_2` int NOT NULL DEFAULT '0',
  `Supplier2` varchar(15) NOT NULL COMMENT 'Option|supplier|ID|Supplier',
  `DateLine2` varchar(10) DEFAULT NULL COMMENT 'Date',
  `Currency2` varchar(10) DEFAULT NULL COMMENT 'Option|currency|Currency|Currency',
  `OfferedCost2` double(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Input',
  `POQty2` int NOT NULL DEFAULT '0' COMMENT 'Input',
  `RetailPrice` double(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Input',
  `PreorderPrice` double(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Input',
  `Deposit` double(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Input',
  `MemberA` varchar(25) DEFAULT NULL COMMENT 'Input',
  `MemberB` varchar(25) DEFAULT NULL COMMENT 'Input',
  `SalesStart_Date` varchar(10) DEFAULT NULL COMMENT 'Date',
  `sale_type` int NOT NULL DEFAULT '0' COMMENT 'Input',
  `SalesEnd_Date` varchar(10) DEFAULT NULL COMMENT 'Date',
  `SPOfferPrice` double(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Input',
  `SP_StartDate` varchar(10) DEFAULT NULL COMMENT 'Date',
  `SP_EndDate` varchar(10) DEFAULT NULL COMMENT 'Date',
  `Date_Created` varchar(10) DEFAULT NULL COMMENT 'Date',
  `Last_Received` varchar(10) DEFAULT NULL COMMENT 'Date',
  `Last_Sold` varchar(10) DEFAULT NULL COMMENT 'Date',
  `LastUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Location` longtext COMMENT 'TextArea',
  `Services` int NOT NULL DEFAULT '0' COMMENT 'Input',
  `RWareHouse1` varchar(15) DEFAULT NULL COMMENT 'Option|warehouse|WHCode|WareHouse',
  `RWareHouse2` varchar(15) DEFAULT NULL COMMENT 'Option|warehouse|WHCode|WareHouse',
  `Summary` longtext NOT NULL COMMENT 'TextArea',
  `Specs` longtext NOT NULL COMMENT 'TextArea',
  `BackStory` longtext NOT NULL COMMENT 'TextArea',
  `Reward` double NOT NULL DEFAULT '0' COMMENT 'Option|rewards|Rewards|Rewards',
  `Release_Date` varchar(10) DEFAULT NULL COMMENT 'Date',
  `RemQty` int NOT NULL DEFAULT '0',
  `BarcodeNo` varchar(25) DEFAULT NULL,
  `Currency` varchar(5) DEFAULT NULL COMMENT 'Option|currency|Currency|Currency',
  `Expiry_Date` varchar(10) DEFAULT NULL COMMENT 'Date',
  `Recommended` int NOT NULL DEFAULT '0',
  `Inventory_Qty` int NOT NULL DEFAULT '0',
  `GroupsID` int NOT NULL,
  `ItemClicks` int NOT NULL DEFAULT '0',
  `ShipBy` varchar(25) NOT NULL,
  `Temp` int NOT NULL DEFAULT '0',*/
    }

}
/* End of file '/Items_model.php' */
/* Location: ./application/controllers//Items_model.php */
