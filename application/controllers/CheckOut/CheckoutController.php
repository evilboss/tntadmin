<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CheckoutController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('ProductsModel', 'ProductImagesModel', 'setting', 'OrdersModel', 'OrderProductModel', 'AddressModel'));
        $this->load->library(array('ion_auth', 'form_validation', 'pagination'));

        $this->data['cart'] = $this->cart;
        if ($this->ion_auth->logged_in()) {
            $this->data['user'] = $this->ion_auth->user()->row();
        }
        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('error', 'You must log in to continue!');
            redirect(base_url('shop/login'));
        }
    }

    public function totalWeights()
    {
        $totalWeights = array();

        foreach ($this->cart->contents() as $content) {
            $product = $this->ProductsModel->get($content['id']);
            array_push($totalWeights, $product->weight * $content['qty']);
        };
        return (object)array(
            'totalWeights' => $totalWeights,
            'total' => array_sum($totalWeights)
        );
    }

    /**
     * Display the list of resource.
     */
    public function index()
    {
        //if cart is empty,
        $debug = array();
        if (count($this->cart->contents()) == 0) {
            $this->session->set_flashdata('error', 'Please add items  to cart first');
            redirect(base_url('/shop'));
            exit();
        } else {
            $this->data['addresses'] = $this->AddressModel->getAddressByUserId($this->data['user']->user_id);
            $this->data['debug'] = $debug;
            $weights = $this->totalWeights();
            $this->data['content'] = 'checkout/checkout';
            $this->data['zones'] = $this->setting->getByKey('shipping_settings')['value'];
            $this->data['weights'] = $weights->totalWeights;
            $this->data['totalWeight'] = $weights->total;

            $this->load->templateProfile('checkout/checkout', $this->data);

        }

    }

    /**
     * Place order
     */
    public function placeOrder()
    {

        $debug = array();

        $cart_contents = $this->cart->contents();
        $total_amt = $this->cart->total(); //Temperory set to cart total
        $this->data['zones'] = $this->setting->getByKey('shipping_settings')['value'];
        $weights = $this->totalWeights();
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->form_validation->set_rules(
                'deliveryId',
                'Delivery Address',
                'required|is_natural_no_zero',
                array('is_natural_no_zero' => 'An address is required to checkout')
            );
            $inputs = $this->input->post();

            array_push($debug, array('method' => 'post', 'inputs' => $inputs));

            if ($this->form_validation->run()) {

                array_push($debug, array('formvalidationrun' => 'true'));

                $order_data = array(
                    'user_id' => $this->data['user']->id,
                    'deliveryId' => $this->input->post('deliveryId'),
                    'order_status' => 'ordered',
                    'total_amt' => $total_amt,
                    'total_weight' => $weights->total
                );
                $order_id = $this->OrdersModel->insert($order_data);
                $index = 0;

                foreach ($cart_contents as $key => $product) {

                    $order_product_data = array(
                        'product_id' => $product['id'],
                        'order_id' => $order_id,
                        'qty' => $product['qty'],
                        'weight' => $weights->totalWeights[$index] * $product['qty']
                    );
                    $index++;

                    $this->OrderProductModel->insert($order_product_data);
                }
                if ($order_id) {
                    $this->cart->destroy();
                    $this->session->set_flashdata('success', 'Order placed successfully');
                    redirect(base_url('shop/orders'));
                    exit;
                } else {
                    $this->session->set_flashdata('error', 'Oops! Something went wrong.');
                    redirect(base_url('shop/orders'));
                    exit;
                }
            } else {
                $this->data['addresses'] = $this->AddressModel->getAddressByUserId($this->data['user']->user_id);
                $this->data['debug'] = $debug;
                $weights = $this->totalWeights();
                $this->data['content'] = 'checkout/checkout';
                $this->data['zones'] = $this->setting->getByKey('shipping_settings')['value'];
                $this->data['weights'] = $weights->totalWeights;
                $this->data['totalWeight'] = $weights->total;

                $this->load->templateProfile('checkout/checkout', $this->data);
            }


        }


    }
}
