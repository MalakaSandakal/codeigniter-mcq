<?php
class Question extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('question_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
            $data['news'] = $this->question_model->get_news();
    
            $this->load->view('news/index', $data);
        }

        public function view($slug = NULL)
        {
                $data['news_item'] = $this->question_model->get_news($slug);
                if (empty($data['news_item']))
                {
                        show_404();
                }        
                $data['title'] = $data['news_item']['title'];        
                $this->load->view('news/view', $data);
        }
}