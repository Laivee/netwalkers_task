<?php defined('BASEPATH') OR exit('No direct script access allowed');

class BlogController extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();

		// Load libraries
		$this->load->library(['form_validation', 'session']);

		// Load helper functions
		$this->load->helper(['url', 'form']);

		// Load model
		$this->load->model('blog');

		// Load database (optional if already set in config/autoload.php)
		$this->load->database();
	}


    public function index()
    {
		$data['title'] = 'List Blogs';
		$this->load->view('head', $data);
		$this->load->view('header', $data);
		$this->load->view('index', $data);
		$this->load->view('footer');

    }

    public function add_post()
    {
		$data['title'] = 'Add Post';

		//we can actually use is_unique[posts.title] without needing a callback method
        $this->form_validation->set_rules('title', 'Post Title', 'trim|required|callback_check_post_title'); 

		//description
        $this->form_validation->set_rules('description', 'Description', 'trim|required|max_length[50]');

		//Author
        $this->form_validation->set_rules('author', 'Author', 'trim|required|max_length[50]');

		//State or location
        $this->form_validation->set_rules('location', 'Location', 'trim|required|max_length[50]');

		//Address
        $this->form_validation->set_rules('address', 'Address', 'trim|required|max_length[50]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('head', $data);
            $this->load->view('header', $data);
            $this->load->view('add_post', $data);
            $this->load->view('footer');
        } else {

			$data = [
				'title' => $this->input->post('title', true),
				'description' => $this->input->post('description', true),
				'location' => $this->input->post('location', true),
				'address' => $this->input->post('address', true),
				'author' => $this->input->post('author', true)
			];

			$this->session->set_flashdata('success', 'Success! Your post was published successfully!');

			$this->blog->create_new_post($data);

			redirect('/');
        }
    }

    // Callback method
    public function check_post_title($title)
    {
        $exists = $this->blog->check_post_title($title);

        if (!empty($exists)) {
            $this->form_validation->set_message('check_post_title', 'This post title already exists!');
            return FALSE;
        }

        return TRUE;
    }
}
