<?php
class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('home');
		$this->load->view('includes/footer');

	}
	public function about()
	{
		$this->load->view('includes/header');
		$this->load->view('about');
		$this->load->view('includes/footer');

	}
	public function services()
	{
		$this->load->view('includes/header');
		$this->load->view('services');
		$this->load->view('includes/footer');
	}
	public function portfolio()
	{
		$this->load->view('includes/header');
		$this->load->view('portfolio');
		$this->load->view('includes/footer');
	}
	public function pricing()
	{
		$this->load->view('includes/header');
		$this->load->view('pricing');
		$this->load->view('includes/footer');
	}
	public function contact()
	{
		$this->load->view('includes/header');
		$this->load->view('contact');
		$this->load->view('includes/footer');
	}
	public function login()
	{
		if ($this->input->method()=='post') 
		{
			$_POST['Password']=md5($_POST['Password']);
			$resp=$this->db->select(['id','name','email','status','access'])->from('users')->where($_POST)->get()->row();
			if ($resp)
			 {
			 	$this->session->set_userdata('user_session',array('access'=>$resp->access,'name'=>$resp->name,'email'=>$resp->email,'user_id'=>$resp->id));
			 	$arr = array('status' =>'true' ,'message'=>'Success','access'=>$resp->access );
				// code...
			}
			else
			{
				$arr = array('status' =>'false' ,'message'=>'Username And Password Invalid' );
			}
			echo json_encode($arr);
		}
		else{
				$session_data=$this->session->userdata('user_session');
				if ($session_data)
				 {
				 	redirect (base_url().'admin');
				 	die();
				 }
				$this->load->view('login');
				}
	}
	public function signup()
	{
		$this->load->view('signup');
	
	}
	public function logout()
	{
		$this->session->unset_userdata('user_session');
		redirect(base_url().'home');
	}
	public function vender_signup()
	{
		if ( $this->input->method()=='post') 
		{
			$this->form_validation->set_rules('location','Location is required','required');
			$this->form_validation->set_rules('mobile_no','Mobile Number is required','required');
			if ($this->form_validation->run()=='true') 
			{
				$resp=$this->cm->insert_data('providers',$_POST);
				if($resp)
					$arr=array('status'=>'true','message'=>'Account Successfully Created','reload'=>base_url().'home');
				else
					$arr=array('status'=>'false','message'=>' Failed Try Again');
				echo json_encode($arr);
				// code...
			}
			else
			{
				print_r(validation_errors());
			}
			// code...
		}
		else
		{
			$this->load->view('vender_signup');

		}
		
	}

}
?>