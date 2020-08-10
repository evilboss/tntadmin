<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminOrdersController extends TNT_Controller
{
    /**
     * AdminCategoriesController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('OrdersModel', 'AddressModel'));
        $this->load->helper("security");

    }

    /**
     * Display the list of resource.
     */
    public function index()
    {
        $this->data['records'] = $this->OrdersModel->order_by('created_at', 'desc')->get_all();
        $this->load->templateAdmin('admin/orders/list', $this->data);
    }

    /**
     * Show the order.
     *
     * @param $id
     */
    public function show($id)
    {
        $record = $this->OrdersModel->getOrder($id);
        $address = $this->AddressModel->get($record->deliveryId);
        $this->data['record'] = $record;
        $record->delivery_address = "$address->country, $address->state, $address->city, $address->street, $address->postcode";
        $this->data['address'] = $address;
        $this->load->templateAdmin('admin/orders/show', $this->data);
    }

    public function delete($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $status = $this->OrdersModel->delete($id);
            if ($status) {
                $this->session->set_flashdata('info', 'Order deleted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to delete Order.');
            }

            redirect(redirect($_SERVER['HTTP_REFERER']));
        }

    }
}
