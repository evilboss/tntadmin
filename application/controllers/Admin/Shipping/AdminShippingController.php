<?php

class AdminShippingController extends TNT_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->templateAdmin('admin/shipping/index', $this->data);

    }

}
