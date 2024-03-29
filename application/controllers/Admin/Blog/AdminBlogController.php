<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class AdminBlogController extends TNT_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

    }

    public function index()
    {
        $this->load->templateAdmin('admin/pages/create', $this->data);
    }

    public function get($id)
    {
        $id = intval($id);
        if ($id != 0) {
            $this->load->model('blog_model');
            $data['content'] = $this->blog_model->get($id);
            $this->load->view('blog_view', $data);
        } else {
            redirect(site_url(), 'refresh');
        }
    }

    public function add()
    {
        $this->form_validation->set_rules('element', 'Element label', 'trim|required');
        if ($this->form_validation->run() === FALSE) {
            $data['input_element'] = array('name' => 'element', 'id' => 'element', 'value' => set_value('element'));
            $this->load->view('blog_view', $data);
        } else {
            $field = $this->input->post('element');
            $this->load->model('blog_model');
            if ($this->blog_model->add(array('field_name' => $field))) {
                $this->load->view('blog_success_page_view');
            } else {
                $this->load->view('blog_error_page_view');
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
            $this->load->view('blog_view', $data);
        } else {
            $element = $this->input->post('element');
            $id = $this->input->post('id');
            $this->load->model('blog_model');
            if ($this->blog_model->update(array('element' => $element), array('id' => $id))) {
                $this->load->view('blog_success_page_view', $data);
            } else {
                $this->load->view('blog_error_page_view');
            }
        }
    }

    public function delete($id)
    {
        $id = intval($id);
        if ($id != 0) {
            $this->load->model('blog_model');
            $data['content'] = $this->blog_model->delete();
            $this->load->view('blog_view', $data);
        } else {
            redirect(site_url(), 'refresh');
        }
    }
}
/* End of file '/Blog.php' */
/* Location: ./application/controllers//Blog.php */
