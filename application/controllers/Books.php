<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Books extends KN_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("books_model");

    }

    public function index()
    {
        $this->data['add_js'] = ['https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js', 'https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js', '/assets/js/books/books.js'];
        $this->data['content'] = 'books';
        $this->load->view('layout/default', $this->data);
    }

    public function get($id)
    {
        $id = intval($id);
        if ($id != 0) {
            $this->load->model('books_model');
            $data['content'] = $this->books_model->get($id);
            $this->load->view('books_view', $data);
        } else {
            redirect(site_url(), 'refresh');
        }
    }

    public function add()
    {
        $this->form_validation->set_rules('element', 'Element label', 'trim|required');
        if ($this->form_validation->run() === FALSE) {
            $data['input_element'] = array('name' => 'element', 'id' => 'element', 'value' => set_value('element'));
            $this->load->view('books_view', $data);
        } else {
            $field = $this->input->post('element');
            $this->load->model('books_model');
            if ($this->books_model->add(array('field_name' => $field))) {
                $this->load->view('books_success_page_view');
            } else {
                $this->load->view('books_error_page_view');
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
            $this->load->view('books_view', $data);
        } else {
            $element = $this->input->post('element');
            $id = $this->input->post('id');
            $this->load->model('books_model');
            if ($this->books_model->update(array('element' => $element), array('id' => $id))) {
                $this->load->view('books_success_page_view', $data);
            } else {
                $this->load->view('books_error_page_view');
            }
        }
    }

    public function delete($id)
    {
        $id = intval($id);
        if ($id != 0) {
            $this->load->model('books_model');
            $data['content'] = $this->books_model->delete();
            $this->load->view('books_view', $data);
        } else {
            redirect(site_url(), 'refresh');
        }
    }

    public function books_page()
    {

        // Datatables Variables
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
        $books = $this->books_model->get_all();

        $data = array();

        foreach ($books->result() as $r) {

            $data[] = array(
                $r->name,
                $r->price,
                $r->author,
                $r->rating . "/10 Stars",
                $r->publisher
            );
        }

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $books->num_rows(),
            "recordsFiltered" => $books->num_rows(),
            "data" => $data
        );
        echo json_encode($output);
        exit();
    }

}
/* End of file '/Books_model.php' */
/* Location: ./application/controllers//Books_model.php */
