<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Docdepot extends CI_Controller {
	
	private $page_per_article = 3;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('verb2bee_model','',TRUE);
	}	

	public function index()
	{
		$header['title'] = 'โปรแกรมจัดเก็บเอกสาร  - ให้เราช่วยท่านในการจัดเก็บเอกสารเถอะครับ แล้วชีวิตจะง่ายขึ้น';
		$header['description'] = 'โปรแกรมจัดเก็บเอกสาร docdepot เป็นโปรแกรมที่กำลังได้รับความนิยมขณะนี้ ช่วยให้ท่านไม่ต้องเหนื่อยหรือปวดหัวกับงานเอกสารอีกต่อไป โทรหาเรา 094-482-7374';
		$header['keywords'] = 'โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสาร,โปรแกรมจัดการเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์';
		$header['active'] = 'home';
		$this->verb2bee_model->update_stat('view_home');
		$this->verb2bee_model->traffic('home');
		
		$content['latest_article'] = $this->verb2bee_model->get_latest_article()->result();
		$content['first_article'] = $this->verb2bee_model->get_first_article()->row();
		
		$content['promotion'] = $this->verb2bee_model->get_first_promotion()->row();

		$this->load->view('header',$header);
		$this->load->view('home',$content);
		$this->load->view('footer');
	}
	
	public function product()
	{
		$header['title'] = 'โปรแกรมจัดเก็บเอกสาร DOCDEPOT - Verb2bee.com';
		$header['description'] = 'ค้นหาง่าย สะดวก รวดเร็ว คุณไม่ต้องวุ่นวายกับการจัดเก็บเอกสารกองโต เหนื่อยไหมที่ต้องการใช้เอกสารเร่งด่วน แต่ต้องเสียเวลาในการค้นหานาน โปรแกรมจัดเก็บเอกสาร ช่วยท่านได้';
		$header['keywords'] = 'โปรแกรมจัดเก็บเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์,โปรแกรมจัดการเอกสาร,ระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสาร';
		$header['active'] = 'product';
		$this->verb2bee_model->update_stat('view_product');
		$this->verb2bee_model->traffic('product');
		$content['user_count'] = $this->verb2bee_model->get_all_user()->num_rows();
		$content['download_count'] = $this->verb2bee_model->get_download_count();
		$this->load->view('header',$header);
		$this->load->view('product',$content);
		$this->load->view('footer');
	}
	
	public function free($email)
	{
		$header['title'] = 'โปรแกรมจัดเก็บเอกสาร DOCDEPOT - Verb2bee.com';
		$header['description'] = 'ค้นหาง่าย สะดวก รวดเร็ว คุณไม่ต้องวุ่นวายกับการจัดเก็บเอกสารกองโต เหนื่อยไหมที่ต้องการใช้เอกสารเร่งด่วน แต่ต้องเสียเวลาในการค้นหานาน โปรแกรมจัดเก็บเอกสาร ช่วยท่านได้';
		$header['keywords'] = 'โปรแกรมจัดเก็บเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์,โปรแกรมจัดการเอกสาร,ระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสาร';
		$header['active'] = 'product';
		$this->verb2bee_model->update_stat('view_product');
		$this->verb2bee_model->traffic('product');
		
		$data = array(
			'is_read' => 1,
			'read_time' => date('Y-m-d H:i:s')
		);
		$this->db->where('email', $email);
		$this->db->update('mail_read', $data);
		
		$content['user_count'] = $this->verb2bee_model->get_all_user()->num_rows();
		$content['download_count'] = $this->verb2bee_model->get_download_count();
		$this->load->view('header',$header);
		$this->load->view('product',$content);
		$this->load->view('footer');
	}
	
	public function feature()
	{
		$header['title'] = 'ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์,โปรแกรมจัดการเอกสาร,โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสาร';
		$header['description'] = 'ค้นหาง่าย สะดวก รวดเร็ว คุณไม่ต้องวุ่นวายกับการจัดเก็บเอกสารกองโต เหนื่อยไหมที่ต้องการใช้เอกสารเร่งด่วน แต่ต้องเสียเวลาในการค้นหานาน ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์ ช่วยท่านได้';
		$header['keywords'] = 'ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์,โปรแกรมจัดการเอกสาร,โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสาร';
		$header['active'] = 'product';
		$this->load->view('header',$header);
		$this->load->view('feature');
		$this->load->view('footer');
	}

	public function book()
	{
		
		$header['title'] = 'จำหน่าย โปรแกรมจัดเก็บเอกสาร | คู่มือการใช้งาน';
		$header['description'] = 'ค้นหาง่าย สะดวก รวดเร็ว คุณไม่ต้องวุ่นวายกับการจัดเก็บเอกสารกองโต เหนื่อยไหมที่ต้องการใช้เอกสารเร่งด่วน แต่ต้องเสียเวลาในการค้นหานาน เรา จำหน่าย โปรแกรมจัดเก็บเอกสาร';
		$header['keywords'] = 'จำหน่าย โปรแกรมจัดเก็บเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์,โปรแกรมจัดการเอกสาร,โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสาร';
		$header['active'] = 'book';
		$content['book_active'] = '';
		$this->verb2bee_model->update_stat('view_book');
		$this->verb2bee_model->traffic('book');
		$this->load->view('header',$header);
		$this->load->view('demo',$content);
		$this->load->view('footer');
		
	}
	
	public function program()
	{
		
		$header['title'] = 'รับเขียนโปรแกรม ติดต่อฐานข้อมูล สำหรับบริษัท ห้างร้าน ราคาเป็นกันเอง';
		$header['description'] = 'รับทำโปรแกรมคอมพิวเตอร์';
		$header['keywords'] = 'รับทำเว็บ,รับเขียนโปรแกรม,รับทำโปรแกรม,รับพัฒนาโปรแกรม,รับเขียนระบบคอมพิวเตอร์,เขียนโปรแกรม,โปรแกรมคอมพิวเตอร์';
		$header['active'] = 'program';
		$this->verb2bee_model->update_stat('view_home');
		$this->verb2bee_model->traffic('home');
		
		$content['latest_article'] = $this->verb2bee_model->get_latest_article()->result();
		$content['first_article'] = $this->verb2bee_model->get_first_article()->row();
		
		$content['promotion'] = $this->verb2bee_model->get_first_promotion()->row();
		
		$this->load->view('header',$header);
		$this->load->view('home',$content);
		$this->load->view('footer');
		
	
	}
	
	public function download()
	{
		
		$header['title'] = 'ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร | DOCDEPOT';
		$header['description'] = 'สนใจ ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร เพื่อการค้นหาง่าย สะดวก รวดเร็ว คุณไม่ต้องวุ่นวายกับการจัดเก็บเอกสารกองโต เหนื่อยไหมที่ต้องการใช้เอกสารเร่งด่วน แต่ต้องเสียเวลาในการค้นหานาน';
		$header['keywords'] = 'ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์,โปรแกรมจัดการเอกสาร,โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสาร';
		$header['active'] = 'product';
		
		$this->load->view('header',$header);
		$this->load->view('download');
		$this->load->view('footer');
		
	}
	
	public function faq()
	{
		$header['title'] = 'โปรแกรมจัดเก็บเอกสาร docdepot - ';
		$header['description'] = 'เราจะทำให้ โปรแกรมเก็บเอกสาร เป็นเรื่องง่าย 094-482-7374  จำหน่าย ระบบการจัดเก็บเอกสาร';
		$header['keywords'] = 'โปรแกรมจัดเก็บเอกสาร';
		$header['active'] = 'product';
		
		$this->load->view('header',$header);
		$this->load->view('faq');
		$this->load->view('footer');
	}

	public function article($category_name,$offset=0)
	{
		$header['title'] = 'โปรแกรมจัดเก็บเอกสาร docdepot - '.$category_name;
		$header['description'] = 'เราจะทำให้ โปรแกรมเก็บเอกสาร เป็นเรื่องง่าย 094-482-7374 ' . $category_name. ' จำหน่าย ระบบการจัดเก็บเอกสาร';
		$header['keywords'] = 'โปรแกรมจัดเก็บเอกสาร,'.$category_name;
		$header['active'] = 'article';
		$this->verb2bee_model->update_stat('view_article');
		$this->verb2bee_model->traffic('article');
		
		// offset
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		if ($offset == null) {
			$offset = 0;
		}	

		$category_id = $this->verb2bee_model->get_category_id_by_category_name($category_name);
				
		$articles = $this->verb2bee_model->get_paged_list_article($category_id,$this->page_per_article, $offset)->result();
				
		// generate pagination
		$this->load->library('pagination');
		$config['base_url'] = site_url('ระบบการจัดเก็บเอกสาร/'.$category_name.'/');
		$config['total_rows'] = $this->verb2bee_model->count_all_article($category_id);
		$config['per_page'] = $this->page_per_article;
		$config['uri_segment'] = $uri_segment;
				
		$config['full_tag_open'] = '<p class="browse">หน้า : &nbsp;&nbsp;&nbsp;';
		$config['full_tag_close'] = '</p>';
			
	 	$config['first_link'] = '<<';
		$config['first_tag_open'] = '<a>';
		$config['first_tag_close'] = '&nbsp;</a>';
			
		$config['last_link'] = '>>';
		$config['last_tag_open'] = '<a>';
		$config['last_tag_close'] = '&nbsp;</a>';
			
		$config['next_link'] = '>';
		$config['next_tag_open'] = '<a>';
		$config['next_tag_close'] = '&nbsp;</a>';
			
		$config['prev_link'] = '<';
		$config['prev_tag_open'] = '<a>';
		$config['prev_tag_close'] = '&nbsp;</a>';
			
		$config['cur_tag_open'] = '&nbsp;<b>';
		$config['cur_tag_close'] = '</b>&nbsp;';
			
		$config['num_tag_open'] = '&nbsp;<a>';
		$config['num_tag_close'] = '&nbsp;</a>';
				
		$this->pagination->initialize($config);
		$content['pagination'] = $this->pagination->create_links();
		$content['total_rows'] = $this->verb2bee_model->count_all_article($category_id);
		$content['articles'] = $articles;
		
		$content['latest_article'] = $this->verb2bee_model->get_latest_article()->result();
		
		$content['categorys'] = $this->verb2bee_model->get_all_category()->result();
		$content['category_active'] = $category_name;
		$this->load->view('header',$header);
		$this->load->view('article',$content);
		$this->load->view('footer');
	}
	
	public function detail($category_name,$title)
	{
		$category_id = $this->verb2bee_model->get_category_id_by_category_name($category_name);
		$id = $this->verb2bee_model->get_id_by_title($title);
		
		$article = $this->verb2bee_model->get_article_by_id($id)->row();
		
		$header['title'] = $title;
		$header['description'] = $category_name.' '.$title;
		$header['keywords'] = $title.',จำหน่ายระบบการจัดเก็บเอกสาร,'.$category_name;
		$header['active'] = 'article';

		$content['article'] = $article;
		$content['category_name'] = $category_name;
		
		$content['relate_article'] = $this->verb2bee_model->get_relate_article($category_id,$id)->result();
		
		$content['categorys'] = $this->verb2bee_model->get_all_category()->result();
		$content['category_active'] = $category_name;
		
		$this->load->view('header',$header);
		$this->load->view('detail',$content);
		$this->load->view('footer');

	}

	public function contact()
	{
		$header['title'] = 'ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์ - ติดต่อเรา';
		$header['description'] = 'หากท่าน สนใจ โปรแกรมจัดเก็บเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์, จำหน่ายโปรแกรมจัดเก็บเอกสาร,ระบบจัดเก็บเอกสาร สามารถติดต่อได้ที่เบอร์ 094-482-7374';
		$header['keywords'] = 'สนใจ โปรแกรมจัดเก็บเอกสาร,จำหน่ายโปรแกรมจัดเก็บเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์,ระบบจัดเก็บเอกสาร';
		$header['active'] = 'contact';
		$this->verb2bee_model->update_stat('view_contact');
		$this->verb2bee_model->traffic('contact');
		$this->load->view('header',$header);
		$this->load->view('contact');
		$this->load->view('footer');
	}	
	
	public function message_save()
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('name', 'ชื่อของคุณ', 'trim|required');
			$this->form_validation->set_rules('email', 'อีเมล', 'valid_email|trim|required');
			$this->form_validation->set_rules('body', 'ข้อความ', 'trim|required');
			$this->form_validation->set_rules('result', 'ผลลัพธ์', 'trim|required');

			if($this->form_validation->run() == TRUE)
			{
				$num1 = $this->session->userdata('num1');
				$num2 = $this->session->userdata('num2');
				
				if ($this->input->post('result') == ($num1 + $num2)) {
				
					$data = array(
						'name' => $this->input->post('name'),
						'company' => $this->input->post('company'),
						'email' => $this->input->post('email'),
						'body' => $this->input->post('body'),
						'send_date' => date('Y-m-d H:i:s'),
						'ip_address' => $this->input->ip_address(),
					);
					
					$this->db->insert('message', $data); 
				
					$this->session->set_flashdata('info', 'ขอขอบคุณ ที่ท่านได้ส่งข้อความถึงเรา และเราจะรีบดำเนินการตอบจดหมายถึงท่านโดยเร็ว');
				} else {
					$this->session->set_flashdata('warning', 'ผลลัพธ์ไม่ถูกต้อง');
				}
				redirect('ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์');

			}

		}
		
		$header['title'] = 'โปรแกรมจัดเก็บเอกสาร - ติดต่อเรา';
		$header['description'] = 'หากท่าน สนใจ โปรแกรมจัดเก็บเอกสาร,จำหน่ายโปรแกรมจัดเก็บเอกสาร,ระบบจัดเก็บเอกสาร สามารถติดต่อได้ที่เบอร์ 094-482-7374';
		$header['keywords'] = 'สนใจ โปรแกรมจัดเก็บเอกสาร,จำหน่ายโปรแกรมจัดเก็บเอกสาร,ระบบจัดเก็บเอกสาร';
		$header['active'] = 'contact';
		$this->load->view('header',$header);
		$this->load->view('contact');
		$this->load->view('footer');
	}
	
	 public function activate($activation_code)
	 {
	 	if($this->bitauth->activate($activation_code))
	 	{
	 		$this->session->set_flashdata('info', 'ท่านได้ยืนยันการสมัครสมาชิกเรียบร้อย โปรดทำการล็อคอินเข้าสู่ระบบ');
	 		redirect('backend/administrator/sign_in');
	 	}

	 	echo 'activation_failed';
	 }
	 
	 ///////////////////////////////////////////////
	 
	 public function demo() {
	 	$header['title'] = 'ระบบจัดเก็บเอกสาร | www.verb2bee.com';
		$header['description'] = 'เป็นระบบที่ได้รับความนิยมในขณะนี้ ระบบจัดเก็บเอกสาร จะช่วยให้ท่านไม่ต้องยุ่งยากในการค้นหาเอกสารเร่งด่วน อีกต่อไป สนใจติดต่อที่ 094-482-7374';
		$header['keywords'] = 'ระบบจัดเก็บเอกสาร,โปรแกรมจัดเก็บเอกสาร,คุณสมบัติโปรแกรมจัดเก็บเอกสาร,โปรแกรมจัดการเอกสาร,ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,จำหน่ายระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์';
		$header['active'] = 'book';
		$content['book_active'] = 'demo';
		$this->load->view('header',$header);
		$this->load->view('demo',$content);
		$this->load->view('footer');
	 }
	 
	 public function book_admin_setting() {
	 	$header['title'] = 'ระบบจัดเก็บเอกสาร | www.verb2bee.com';
		$header['description'] = 'เป็นระบบที่ได้รับความนิยมในขณะนี้ ระบบจัดเก็บเอกสาร จะช่วยให้ท่านไม่ต้องยุ่งยากในการค้นหาเอกสารเร่งด่วน อีกต่อไป สนใจติดต่อที่ 094-482-7374';
		$header['keywords'] = 'ระบบจัดเก็บเอกสาร,โปรแกรมจัดเก็บเอกสาร,คุณสมบัติโปรแกรมจัดเก็บเอกสาร,โปรแกรมจัดการเอกสาร,ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,จำหน่ายระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์';
		$header['active'] = 'book';
		$content['book_active'] = 'book_admin_setting';
		$this->load->view('header',$header);
		$this->load->view('book_admin_setting',$content);
		$this->load->view('footer');
	 }
	 
	 public function book_admin_category() {
	 	$header['title'] = 'โปรแกรมจัดเก็บเอกสาร | www.verb2bee.com';
		$header['description'] = 'เป็นระบบที่ได้รับความนิยมในขณะนี้ โปรแกรมจัดเก็บเอกสาร จะช่วยให้ท่านไม่ต้องยุ่งยากในการค้นหาเอกสารเร่งด่วน อีกต่อไป สนใจติดต่อที่ 094-482-7374';
		$header['keywords'] = 'ระบบจัดเก็บเอกสาร,โปรแกรมจัดเก็บเอกสาร,คุณสมบัติโปรแกรมจัดเก็บเอกสาร,โปรแกรมจัดการเอกสาร,ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,จำหน่ายระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์';
		$header['active'] = 'book';
		$content['book_active'] = 'book_admin_category';
		$this->load->view('header',$header);
		$this->load->view('book_admin_category',$content);
		$this->load->view('footer');
	 }
	 
	 public function book_admin_department() {
	 	$header['title'] = 'คุณสมบัติโปรแกรมจัดเก็บเอกสาร | www.verb2bee.com';
		$header['description'] = 'เป็นระบบที่ได้รับความนิยมในขณะนี้ คุณสมบัติโปรแกรมจัดเก็บเอกสาร จะช่วยให้ท่านไม่ต้องยุ่งยากในการค้นหาเอกสารเร่งด่วน อีกต่อไป สนใจติดต่อที่ 094-482-7374';
		$header['keywords'] = 'ระบบจัดเก็บเอกสาร,โปรแกรมจัดเก็บเอกสาร,คุณสมบัติโปรแกรมจัดเก็บเอกสาร,โปรแกรมจัดการเอกสาร,ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,จำหน่ายระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์';
		$header['active'] = 'book';
		$content['book_active'] = 'book_admin_department';
		$this->load->view('header',$header);
		$this->load->view('book_admin_department',$content);
		$this->load->view('footer');
	 }
	 
	 public function book_admin_user() {
	 	$header['title'] = 'โปรแกรมจัดการเอกสาร | www.verb2bee.com';
		$header['description'] = 'เป็นระบบที่ได้รับความนิยมในขณะนี้ โปรแกรมจัดการเอกสาร จะช่วยให้ท่านไม่ต้องยุ่งยากในการค้นหาเอกสารเร่งด่วน อีกต่อไป สนใจติดต่อที่ 094-482-7374';
		$header['keywords'] = 'ระบบจัดเก็บเอกสาร,โปรแกรมจัดเก็บเอกสาร,คุณสมบัติโปรแกรมจัดเก็บเอกสาร,โปรแกรมจัดการเอกสาร,ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,จำหน่ายระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์';
		$header['active'] = 'book';
		$content['book_active'] = 'book_admin_user';
		$this->load->view('header',$header);
		$this->load->view('book_admin_user',$content);
		$this->load->view('footer');
	 }
	 
	 public function book_admin_language() {
	 	$header['title'] = 'ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร | www.verb2bee.com';
		$header['description'] = 'เป็นระบบที่ได้รับความนิยมในขณะนี้ ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร จะช่วยให้ท่านไม่ต้องยุ่งยากในการค้นหาเอกสารเร่งด่วน อีกต่อไป สนใจติดต่อที่ 094-482-7374';
		$header['keywords'] = 'ระบบจัดเก็บเอกสาร,โปรแกรมจัดเก็บเอกสาร,คุณสมบัติโปรแกรมจัดเก็บเอกสาร,โปรแกรมจัดการเอกสาร,ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,จำหน่ายระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์';
		$header['active'] = 'book';
		$content['book_active'] = 'book_admin_language';
		$this->load->view('header',$header);
		$this->load->view('book_admin_language',$content);
		$this->load->view('footer');
	 }
	 
	 public function book_admin_profile() {
	 	$header['title'] = 'ระบบการจัดเก็บเอกสาร | www.verb2bee.com';
		$header['description'] = 'เป็นระบบที่ได้รับความนิยมในขณะนี้ ระบบการจัดเก็บเอกสาร จะช่วยให้ท่านไม่ต้องยุ่งยากในการค้นหาเอกสารเร่งด่วน อีกต่อไป สนใจติดต่อที่ 094-482-7374';
		$header['keywords'] = 'ระบบจัดเก็บเอกสาร,โปรแกรมจัดเก็บเอกสาร,คุณสมบัติโปรแกรมจัดเก็บเอกสาร,โปรแกรมจัดการเอกสาร,ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,จำหน่ายระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์';
		$header['active'] = 'book';
		$content['book_active'] = 'book_admin_profile';
		$this->load->view('header',$header);
		$this->load->view('book_admin_profile',$content);
		$this->load->view('footer');
	 }
	 
	 /////////////////////////////////////////////
	 
	 public function book_user_setting() {
	 	$header['title'] = 'จำหน่ายระบบการจัดเก็บเอกสาร | www.verb2bee.com';
		$header['description'] = 'เป็นระบบที่ได้รับความนิยมในขณะนี้ จำหน่ายระบบการจัดเก็บเอกสาร จะช่วยให้ท่านไม่ต้องยุ่งยากในการค้นหาเอกสารเร่งด่วน อีกต่อไป สนใจติดต่อที่ 094-482-7374';
		$header['keywords'] = 'ระบบจัดเก็บเอกสาร,โปรแกรมจัดเก็บเอกสาร,คุณสมบัติโปรแกรมจัดเก็บเอกสาร,โปรแกรมจัดการเอกสาร,ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,จำหน่ายระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์';
		$header['active'] = 'book';
		$content['book_active'] = 'book_user_setting';
		$this->load->view('header',$header);
		$this->load->view('book_user_setting',$content);
		$this->load->view('footer');
	 }
	 
	 public function book_user_category() {
	 	$header['title'] = 'ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์ | www.verb2bee.com';
		$header['description'] = 'เป็นระบบที่ได้รับความนิยมในขณะนี้ ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์ จะช่วยให้ท่านไม่ต้องยุ่งยากในการค้นหาเอกสารเร่งด่วน อีกต่อไป สนใจติดต่อที่ 094-482-7374';
		$header['keywords'] = 'ระบบจัดเก็บเอกสาร,โปรแกรมจัดเก็บเอกสาร,คุณสมบัติโปรแกรมจัดเก็บเอกสาร,โปรแกรมจัดการเอกสาร,ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,จำหน่ายระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์';
		$header['active'] = 'book';
		$content['book_active'] = 'book_user_category';
		$this->load->view('header',$header);
		$this->load->view('book_user_category',$content);
		$this->load->view('footer');
	 }
	 
	 public function book_user_mycategory() {
	 	$header['title'] = 'ระบบจัดเก็บเอกสาร | www.verb2bee.com';
		$header['description'] = 'เป็นระบบที่ได้รับความนิยมในขณะนี้ ระบบจัดเก็บเอกสาร จะช่วยให้ท่านไม่ต้องยุ่งยากในการค้นหาเอกสารเร่งด่วน อีกต่อไป สนใจติดต่อที่ 094-482-7374';
		$header['keywords'] = 'ระบบจัดเก็บเอกสาร,โปรแกรมจัดเก็บเอกสาร,คุณสมบัติโปรแกรมจัดเก็บเอกสาร,โปรแกรมจัดการเอกสาร,ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,จำหน่ายระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์';
		$header['active'] = 'book';
		$content['book_active'] = 'book_user_mycategory';
		$this->load->view('header',$header);
		$this->load->view('book_user_mycategory',$content);
		$this->load->view('footer');
	 }
	 
	 public function book_user_language() {
	 	$header['title'] = 'โปรแกรมจัดเก็บเอกสาร | www.verb2bee.com';
		$header['description'] = 'เป็นระบบที่ได้รับความนิยมในขณะนี้ โปรแกรมจัดเก็บเอกสาร จะช่วยให้ท่านไม่ต้องยุ่งยากในการค้นหาเอกสารเร่งด่วน อีกต่อไป สนใจติดต่อที่ 094-482-7374';
		$header['keywords'] = 'ระบบจัดเก็บเอกสาร,โปรแกรมจัดเก็บเอกสาร,คุณสมบัติโปรแกรมจัดเก็บเอกสาร,โปรแกรมจัดการเอกสาร,ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,จำหน่ายระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์';
		$header['active'] = 'book';
		$content['book_active'] = 'book_user_language';
		$this->load->view('header',$header);
		$this->load->view('book_user_language',$content);
		$this->load->view('footer');
	 }
	 
	 public function book_user_profile() {
	 	$header['title'] = 'คุณสมบัติโปรแกรมจัดเก็บเอกสาร | www.verb2bee.com';
		$header['description'] = 'เป็นระบบที่ได้รับความนิยมในขณะนี้ คุณสมบัติโปรแกรมจัดเก็บเอกสาร จะช่วยให้ท่านไม่ต้องยุ่งยากในการค้นหาเอกสารเร่งด่วน อีกต่อไป สนใจติดต่อที่ 094-482-7374';
		$header['keywords'] = 'ระบบจัดเก็บเอกสาร,โปรแกรมจัดเก็บเอกสาร,คุณสมบัติโปรแกรมจัดเก็บเอกสาร,โปรแกรมจัดการเอกสาร,ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,จำหน่ายระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์';
		$header['active'] = 'book';
		$content['book_active'] = 'book_user_profile';
		$this->load->view('header',$header);
		$this->load->view('book_user_profile',$content);
		$this->load->view('footer');
	 }
	 
	 ////////////////////////////////////////////
	 
	 public function book_setup_webserver() {
	 	$header['title'] = 'โปรแกรมจัดการเอกสาร | www.verb2bee.com';
		$header['description'] = 'เป็นระบบที่ได้รับความนิยมในขณะนี้ โปรแกรมจัดการเอกสาร จะช่วยให้ท่านไม่ต้องยุ่งยากในการค้นหาเอกสารเร่งด่วน อีกต่อไป สนใจติดต่อที่ 094-482-7374';
		$header['keywords'] = 'ระบบจัดเก็บเอกสาร,โปรแกรมจัดเก็บเอกสาร,คุณสมบัติโปรแกรมจัดเก็บเอกสาร,โปรแกรมจัดการเอกสาร,ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,จำหน่ายระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์';
		$header['active'] = 'book';
		$content['book_active'] = 'book_setup_webserver';
		$this->load->view('header',$header);
		$this->load->view('book_setup_webserver',$content);
		$this->load->view('footer');
	 }
	 
	 public function book_setup_docdepot() {
	 	$header['title'] = 'ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร | www.verb2bee.com';
		$header['description'] = 'เป็นระบบที่ได้รับความนิยมในขณะนี้ ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร จะช่วยให้ท่านไม่ต้องยุ่งยากในการค้นหาเอกสารเร่งด่วน อีกต่อไป สนใจติดต่อที่ 094-482-7374';
		$header['keywords'] = 'ระบบจัดเก็บเอกสาร,โปรแกรมจัดเก็บเอกสาร,คุณสมบัติโปรแกรมจัดเก็บเอกสาร,โปรแกรมจัดการเอกสาร,ดาวน์โหลดฟรี โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,จำหน่ายระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์';
		$header['active'] = 'book';
		$content['book_active'] = 'book_setup_docdepot';
		$this->load->view('header',$header);
		$this->load->view('book_setup_docdepot',$content);
		$this->load->view('footer');
	 }
	 
	 public function keyword() {
		$header['title'] = 'โปรแกรมจัดเก็บเอกสาร  - ให้เราช่วยท่านในการจัดเก็บเอกสารเถอะครับ แล้วชีวิตจะง่ายขึ้น';
		$header['description'] = 'โปรแกรมจัดเก็บเอกสาร docdepot เป็นโปรแกรมที่กำลังได้รับความนิยมขณะนี้ ช่วยให้ท่านไม่ต้องเหนื่อยหรือปวดหัวกับงานเอกสารอีกต่อไป โทรหาเรา 094-482-7374';
		$header['keywords'] = 'โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสาร,โปรแกรมจัดการเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์';
		$header['active'] = '';

		$this->load->view('header',$header);
		$this->load->view('keyword');
		$this->load->view('footer');
	 }
	 
	 public function keyword1() {
		$header['title'] = 'โปรแกรมจัดเก็บเอกสาร  - ให้เราช่วยท่านในการจัดเก็บเอกสารเถอะครับ แล้วชีวิตจะง่ายขึ้น';
		$header['description'] = 'โปรแกรมจัดเก็บเอกสาร docdepot เป็นโปรแกรมที่กำลังได้รับความนิยมขณะนี้ ช่วยให้ท่านไม่ต้องเหนื่อยหรือปวดหัวกับงานเอกสารอีกต่อไป โทรหาเรา 094-482-7374';
		$header['keywords'] = 'โปรแกรมจัดเก็บเอกสาร,ระบบการจัดเก็บเอกสาร,ระบบจัดเก็บเอกสาร,โปรแกรมจัดการเอกสาร,ระบบจัดเก็บเอกสารอิเล็กทรอนิกส์';
		$header['active'] = '';

		$this->load->view('header',$header);
		$this->load->view('keyword1');
		$this->load->view('footer');
	 }
	 
	function get_serial1() {
		//$serial = str_replace("(","",str_replace(")","",$this->verb2bee_model->GetVolumeLabel("c")));
		//echo 'Serial : '.$serial;
		echo '<pre>';
		$result = dns_get_record("php.net", DNS_ANY, $authns, $addtl);
		echo "Result = ";
		print_r($result);
		echo "Auth NS = ";
		print_r($authns);
		echo "Additional = ";
		print_r($addtl);

	}
	
	function validate_key($key) {
		$sql = "SELECT * FROM buvnqe0coyaaa35hmusn43ldrt7ury WHERE (VsFHtPt8k3SNXd7ulUTAXfrVKNtRbG = '".$key."') AND (active = 1)";
		$result = $this->db->query($sql)->result();
		if (empty($result)) {
			return false;
		} else {
			return true;
		}
	}
	
	public function download_file($file_name) {

		$file_name = str_replace("__","/",$file_name);
	
		$file = base_url().$file_name;
			
		$arr = explode('/',$file);
			
		$c = count($arr) - 1;
			
		$data = file_get_contents($file); 
			
		$name = $arr[$c];
			
		force_download($name, $data); 
	}
			

	
}

/* End of file docdepot.php */
/* Location: ./application/controllers/docdepot.php */