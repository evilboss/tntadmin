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

    protected function setValidationRules($orderStatus)
    {

        switch ($orderStatus) {
            case "Processing":

                $this->form_validation->set_rules('transactionNumber', 'Transaction Number', 'required');
                break;
            case "For Payment":
                $this->form_validation->set_rules('shippingPrice', 'Shipping Price', 'required');
                break;
            case "green":
                echo "Your favorite color is green!";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }

    }

    /**
     * Show the order.
     *
     * @param $id
     */
    public function show($id)
    {
        $record = $this->OrdersModel->getOrder($id);

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $inputs = $this->input->post();

            $orderStatus = $inputs['order_status'];
            $this->setValidationRules($orderStatus);


            $this->form_validation->set_rules('order_status', 'Order Status', 'required');

            if ($this->form_validation->run() === true) {
                $record->order_status = $orderStatus;
                $this->OrdersModel->update($id, $inputs);
                $this->session->set_flashdata('success', 'Order Updated');
            } else {
                $this->session->set_flashdata('error', $this->form_validation->error_string());

            }


        }


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
