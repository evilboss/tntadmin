<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Order extends TNT_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('Order_model');
        $this->data['order'] = $this->Order_model->get_all();
        $this->data['content'] = 'order/list';
        $this->data['add_css'] = ['/assets/css/uploader.css'];
        $this->data['add_js'] = ['https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js', 'https://blueimp.github.io/jQuery-File-Upload/js/vendor/jquery.ui.widget.js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-file-upload/4.0.11/jquery.uploadfile.min.js', 'https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js', '/assets/js/order/uploader.js'];
        $this->load->view('layout/default', $this->data);
    }

    public function get($id)
    {
        $id = intval($id);
        if ($id != 0) {
            $this->load->model('Order_model');
            $data['content'] = $this->order_model->get($id);
            $this->load->view('order_view', $data);
        } else {
            redirect(site_url(), 'refresh');
        }
    }

    public function add()
    {
        $this->form_validation->set_rules('element', 'Element label', 'trim|required');
        if ($this->form_validation->run() === FALSE) {
            $data['input_element'] = array('name' => 'element', 'id' => 'element', 'value' => set_value('element'));
            $this->load->view('order_view', $data);
        } else {
            $field = $this->input->post('element');
            $this->load->model('order_model');
            if ($this->order_model->add(array('field_name' => $field))) {
                $this->load->view('order_success_page_view');
            } else {
                $this->load->view('order_error_page_view');
            }
        }
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
            $this->load->view('order_view', $data);
        } else {
            $element = $this->input->post('element');
            $id = $this->input->post('id');
            $this->load->model('order_model');
            if ($this->order_model->update(array('element' => $element), array('id' => $id))) {
                $this->load->view('order_success_page_view', $data);
            } else {
                $this->load->view('order_error_page_view');
            }
        }
    }

    public function delete($id)
    {
        $id = intval($id);
        if ($id != 0) {
            $this->load->model('order_model');
            $data['content'] = $this->order_model->delete();
            $this->load->view('order_view', $data);
        } else {
            redirect(site_url(), 'refresh');
        }
    }
}
/* End of file '/Order_model.php' */
/* Location: ./application/controllers//Order_model.php */
