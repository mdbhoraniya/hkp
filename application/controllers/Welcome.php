<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('welcome_model','welcome');
	}

	public function index()
	{
		$header_data['page_title'] = 'Budget hotel rooms in South Mumbai - Hotel Kalpana Palace';
		$header_data['page_name'] = 'home';
		$header_data['meta_keywords'] = 'hkp, budget hotel rooms in south mumbai, hotels near saifee hospital, hotels near jaslok hospital, budget hotels in mumbai,book room with zero down payment';
		$header_data['meta_description'] = 'Hotel Kalpana Palace in South Mumbai, is a unique blend of comfortable rooms, warm hospitality and homely ambiance';
		$this->load->view('header',$header_data);
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function about()
	{
		$header_data['page_title'] = 'About - Hotel Kalpana Palace';
		$header_data['page_name'] = 'about';
		$header_data['meta_keywords'] = 'hkp, budget hotel rooms in south mumbai, hotels near saifee hospital, hotels near jaslok hospital, budget hotels in mumbai,book room with zero down payment';
		$header_data['meta_description'] = 'Hotel Kalpana Palace in South Mumbai, is a unique blend of comfortable rooms, warm hospitality and homely ambiance';
		$this->load->view('header',$header_data);
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function contact()
	{
		$header_data['page_title'] = 'Contact Us - Hotel Kalpana Palace';
		$header_data['page_name'] = 'contact';
		$header_data['meta_keywords'] = 'hkp, budget hotel rooms in south mumbai, hotels near saifee hospital, hotels near jaslok hospital, budget hotels in mumbai,book room with zero down payment,hkp.hotelkalpanapalace@gmail.com, 23000846, 23000847, 23004911, 23004912,9619443332';
		$header_data['meta_description'] = 'Feel free to contact Hotel Kalpana Palace  on 9619 44 3332 or using the contact form on the website';
		$this->load->view('header',$header_data);
		$this->load->view('contact');
		$this->load->view('footer');
	}

	public function booking()
	{
		$header_data['page_title'] = 'Book room with zero down payment - Hotel Kalpana Palace';
		$header_data['page_name'] = 'booking';
		$header_data['meta_keywords'] = 'hkp, budget hotel rooms in south mumbai, hotels near saifee hospital, hotels near jaslok hospital, budget hotels in mumbai,book room with zero down payment';
		$header_data['meta_description'] = 'Hotel Kalpana Palace in South Mumbai, is a unique blend of comfortable rooms, warm hospitality and homely ambiance';
		$this->load->view('header',$header_data);
		$this->load->view('booking');
		$this->load->view('footer');
	}

	public function testimonials()
	{
		$header_data['page_title'] = 'Testimonials - Hotel Kalpana Palace';
		$header_data['page_name'] = 'testimonials';
		$header_data['meta_keywords'] = 'hkp, budget hotel rooms in south mumbai, hotels near saifee hospital, hotels near jaslok hospital, budget hotels in mumbai,book room with zero down payment';
		$header_data['meta_description'] = 'Hotel Kalpana Palace in South Mumbai, is a unique blend of comfortable rooms, warm hospitality and homely ambiance';
		$this->load->view('header',$header_data);
		$this->load->view('testimonials');
		$this->load->view('footer');
	}

	public function rooms()
	{
		$header_data['page_title'] = 'Best Rooms With Best Services - Hotel Kalpana Palace';
		$header_data['page_name'] = 'rooms';
		$header_data['meta_keywords'] = 'hkp, budget hotel rooms in south mumbai, hotels near saifee hospital, hotels near jaslok hospital, budget hotels in mumbai,book room with zero down payment';
		$header_data['meta_description'] = 'Hotel Kalpana Palace in South Mumbai, is a unique blend of comfortable rooms, warm hospitality and homely ambiance';
		$this->load->view('header',$header_data);
		$this->load->view('rooms');
		$this->load->view('footer');
	}

	public function nearby()
	{
		$header_data['page_title'] = 'Places Nearby - Hotel Kalpana Palace';
		$header_data['page_name'] = 'nearby';
		$header_data['meta_keywords'] = 'hkp, budget hotel rooms in south mumbai, hotels near saifee hospital, hotels near jaslok hospital, budget hotels in mumbai,book room with zero down payment';
		$header_data['meta_description'] = 'Hotel Kalpana Palace in South Mumbai, is a unique blend of comfortable rooms, warm hospitality and homely ambiance';
		$this->load->view('header',$header_data);
		$this->load->view('nearby');
		$this->load->view('footer');
	}

	public function gallery()
	{
		$header_data['page_title'] = 'Gallery - Hotel Kalpana Palace';
		$header_data['page_name'] = 'gallery';
		$header_data['meta_keywords'] = 'hkp, budget hotel rooms in south mumbai, hotels near saifee hospital, hotels near jaslok hospital, budget hotels in mumbai,book room with zero down payment';
		$header_data['meta_description'] = 'Hotel Kalpana Palace in South Mumbai, is a unique blend of comfortable rooms, warm hospitality and homely ambiance';
		$this->load->view('header',$header_data);
		$this->load->view('gallery');
		$this->load->view('footer');
	}

	public function save_contact_form()
	{
		$agent_data         = $this->user_agent();
		$data['user_agent'] = $agent_data['user_agent'];
		$data['platform']   = $agent_data['platform'];
		$data['ip_address'] = $this->input->ip_address();
		$data['name']       = $this->input->post('name');
		$data['mobile']     = $this->input->post('mobile');
		$data['email']      = $this->input->post('email');
		$data['message']    = $this->input->post('message');
		$data['created']    = date('Y-m-d H:i:s');

		$res = $this->welcome->insert_contact_form($data);

		$this->send_email('contact',$data,'Website contact form');

		echo ($res > 0 ) ? true : false;
		exit;
	}

	public function save_booking_form()
	{
		$agent_data               = $this->user_agent();
		$data['user_agent']       = $agent_data['user_agent'];
		$data['platform']         = $agent_data['platform'];
		$data['ip_address']       = $this->input->ip_address();
		$data['first_name']       = $this->input->post('first_name');
		$data['last_name']        = $this->input->post('last_name');
		$data['mobile']           = $this->input->post('mobile');
		$data['email']            = $this->input->post('email');
		$data['address']          = $this->input->post('address');
		$data['zip_code']         = $this->input->post('zip_code');
		$data['city']             = $this->input->post('city');
		$data['state']            = $this->input->post('state');
		$data['country']          = $this->input->post('country');
		$data['checkin']          = $this->input->post('checkin');
		$data['checkout']         = $this->input->post('checkout');
		$data['adult_guest']      = $this->input->post('adult_guest');
		$data['child_guest']      = $this->input->post('child_guest');
		$data['no_of_rooms']      = $this->input->post('rooms');
		$data['type_of_room']     = $this->input->post('type_of_room');
		$data['any_requirements'] = $this->input->post('any_requirements');
		$data['created']          = date('Y-m-d H:i:s');

		$res = $this->welcome->insert_booking_form($data);

		$this->send_email('booking',$data,'New Booking');

		echo ($res > 0 ) ? true : false;
		exit;
	}

	public function send_email($type='',$data=array(),$subject=''){

		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => '465',
			'smtp_user' => 'mdbhoraniya@gmail.com',
			'smtp_pass' => 'madiha@117diff',
			'mailtype'  => 'html',
			'charset'   => 'utf-8'
		);

		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");
		
		$this->email->from('mdbhoraniya@gmail.com', 'MD Bhoraniya');
		$this->email->to('mdbhoraniya@gmail.com');
		// $this->email->cc('another@example.com');
		// $this->email->bcc('and@another.com');
		$message_body = $this->load->view('emailer/'.$type, $data, true);
		
		$this->email->subject($subject);
		$this->email->message($message_body);
		
		$this->email->send();
		
		// echo $this->email->print_debugger();
	}

	private function user_agent()
	{
		$this->load->library('user_agent');

		if ($this->agent->is_browser()){
		    $agent = $this->agent->browser().' '.$this->agent->version();
		}elseif ($this->agent->is_robot()){
		    $agent = $this->agent->robot();
		}elseif ($this->agent->is_mobile()){
		    $agent = $this->agent->mobile();
		}else{
		    $agent = 'Unidentified User Agent';
		}

		$platform = $this->agent->platform(); // Platform info (Windows, Linux, Mac, etc.)

		$agent_data = array(
			'platform'   => $platform,
			'user_agent' => $agent
		);

		return $agent_data;

	}

}
