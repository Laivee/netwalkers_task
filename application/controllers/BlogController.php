<?php defined('BASEPATH') OR exit('No direct script access allowed');

class BlogController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog'); // Loads Blog model
        $this->load->library('form_validation'); // Loads Form Validation library
        $this->load->database(); //Load in the database connection
    }

    public function index()
    {
		$this->load->view('head');
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');

    }

    public function add_post()
    {
        $this->form_validation->set_rules('title', 'Post Title', 'trim|required|callback_check_post_title');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('head');
            $this->load->view('header');
            $this->load->view('add_post');
            $this->load->view('footer');
        } else {
            echo "Validation passed!";
        }
    }

    // Callback method
    public function check_post_title($title)
    {
        $exists = $this->Blog->check_post_title($title);

        if (!empty($exists)) {
            $this->form_validation->set_message('check_post_title', 'This post title already exists!');
            return FALSE;
        }

        return TRUE;
    }
}
