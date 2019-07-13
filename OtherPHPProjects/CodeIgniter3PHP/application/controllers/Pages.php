<?php

class Pages extends CI_Controller
{
    public function view($page = 'home')
    {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            //this error comes with Codeigniter
            show_404();
        }
        //Make first letter a capital one
        $data['title'] = ucfirst($page);

        $this->load->view('templates/header');
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer');

    }
}
