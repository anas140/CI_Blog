<?php 
	class Posts extends CI_Controller {
		public function index() {
			$data['title'] = 'Latest Posts';

			$data['posts'] = $this->PostModel->getPosts();
			// print_r($data['posts']);

			$this->load->view('templates/header', $data);
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}
		public function view($slug = NULL) {
			$data['post'] = $this->PostModel->getPosts($slug);
			if(empty($data['post'])) {
				show_404();
			}
			$data['title'] = $data['post']['title'];
			$this->load->view('templates/header', $data);
			$this->load->view('posts/show', $data);
			$this->load->view('templates/footer');

		}
	}
