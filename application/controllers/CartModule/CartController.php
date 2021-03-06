<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CartController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProductsModel');
        $this->load->model('ProductImagesModel');
        $this->data['cart'] = $this->cart;

    }

    /**
     * Add product to cart.
     */
    public function addToCart()
    {
        $product_id = $this->input->post('id');

        $product = $this->ProductsModel->get($product_id);
        $qty = 1;
        if ($this->input->post('qty')) {
            $qty = $this->input->post('qty');
        }
        $product_display_img = "";
        $image = $this->ProductImagesModel->getThumbNail($product->id);
        if ($image) {
            $product_display_img = "images/products/$image";
        }
        $data = array(
            'id' => $product->id,
            'qty' => $qty,
            'price' => $product->price,
            'name' => $product->name,
            'options' => array('product_image' => $product_display_img),
        );
        $this->cart->product_name_rules = '\d\D';

        $status = $this->cart->insert($data);
        if ($status) {
            $this->session->set_flashdata('success', 'Product added to cart successfully');
        } else {
            $this->session->set_flashdata('error', 'Failed to add product to cart');
        }
        // print_r($data);
        redirect($_SERVER['HTTP_REFERER']);
        exit;

    }

    /**
     * Update cart
     */
    public function updateCart()
    {
        $input_cart = $product_id = $this->input->post('cart');
        $status = $this->cart->update($input_cart);

        if ($status) {
            $this->session->set_flashdata('success', 'Cart updated successfully');
        }
        redirect($_SERVER['HTTP_REFERER']);
        exit;
    }

    public function removeItem()
    {
        $this->input->post("row_id");
    }


    /**
     * Display the list of resource.
     *
     *
     */
    public function show()
    {

        $this->data['content'] = 'cart/cart';
        $this->load->templateProfile('cart/cart', $this->data);
    }
}
