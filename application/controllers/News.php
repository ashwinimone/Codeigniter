<?php

class News extends CI_Controller{
	public function __construct(){
		parent::__construct();
		//$this->load->model('news_model');
		$this->load->helper('url_helper');		
	}
	
	public function index(){
		set_status_header(200); 
         echo is_php('5.3')."<br>"; 
         var_dump(is_really_writable('./Form.php')); 
			
         echo config_item('language')."<br>"; 
         echo remove_invisible_characters('This is a ‌test','UTF8')."<br>"; 
			
         $str = '< This > is \' a " test & string'; 
         echo html_escape($str)."<br>"; 
         echo "is_https():".var_dump(is_https())."<br>"; 
         echo "is_cli():".var_dump(is_cli())."<br>"; 
			
         var_dump(function_usable('test'))."<br>"; 
         echo "get_mimes():".print_r(get_mimes())."<br>"; 
		
	}
	
	public function view($slug = NULL){
		$data['news_item'] = $this->news_model->get_news($slug);
		
		if(empty($data['news_item'])){
			show_404();
		}
		
		$data['title'] = $data['news_item']['title'];
		
		$this->load->view('templates/header', $data);
		$this->load->view('news/view', $data);
		$this->load->view('templates/footer');
	}
	
	public function create(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Create a news item';
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');
		
		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('news/create');
			$this->load->view('templates/footer');
		}
		else{
			$this->news_model->set_news();
			$this->load->view('news/success');
			
		}
		
	}
	
}