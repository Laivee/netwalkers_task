<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Model {

    public function check_post_title($title)
    {
        $query = $this->db->get_where('posts', ['title' => $title]);
        return $query->result_array();
    }

    public function create_new_post($data)
    {
        $this->db->insert('posts', $data);
    }
    public function fetch_all_posts()
    {
        $query = $this->db->get('posts');
        return $query->result_array();
    }

}