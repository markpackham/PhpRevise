<?php

class Categories extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Create category';

        $data['categories'] = $this->category_model->get_categories();

        $this->load->view('templates/header');
        $this->load->view('categories/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        //Check if user logged in
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $data['title'] = 'Create category';

        $this->form_validation->set_rules('name', 'Name', 'required');
        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header');
            $this->load->view('categories/create', $data);
            $this->load->view('templates/footer');

        } else {
            $this->category_model->create_category();
            $this->session->set_flashdata('category_created', 'Category created');

            redirect('categories');
        }
    }

    //for Categories and not Blog posts
    public function posts($id)
    {
        $data['title'] = $this->category_model->get_category($id)->name;

        $data['posts'] = $this->post_model->get_posts_by_category($id);

        $this->load->view('templates/header');
        //Use this from Post_model
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }


    public function delete($id)
    {
        //Check if user logged in
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $this->category_model->delete_category($id);
        $this->session->set_flashdata('category_deleted', 'Category deleted');

        redirect('categories');
    }
}