<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminContactUsController extends TNT_Controller
{
    /**
     * AdminDashboardController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ContactUsModel');
        $this->load->helper('admin');
        /*if(!$this->session->logged_in){
            redirect(base_url('index.php/login'));
            exit;
        }*/
    }

    /**
     * Show resource
     *
     * @param $id
     */
    public function show($id)
    {

        $this->data['record'] = $this->ContactUsModel->get($id);
        $this->load->templateAdmin('admin/contact_us/show', $this->data);
    }

    /**
     * Show list of contact us requests
     */
    public function index()
    {
        $pagination_config = getAdminPaginationConfig($this->ContactUsModel->count_all(), 15);

        $this->load->library('pagination');
        $this->pagination->initialize($pagination_config);

        $this->data['contact_us_rows'] = $this->ContactUsModel->order_by('created_at', 'desc')->limit($pagination_config['per_page'], $this->input->get('per_page'))->get_all();

        $this->load->templateAdmin('admin/contact_us/index', $this->data);
    }

    /**
     * Deletes the resource
     *
     * @param $id
     */
    public function delete($id)
    {

        $this->ContactUsModel->delete($id);
        $this->session->set_flashdata('info', 'Contact Us request deleted successfully.');
        redirect(base_url('index.php/admin/contact-us'));
    }
}
