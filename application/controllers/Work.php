<?php
class Work extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
	}
	public function request()
	{
		$data['page_title']="Request";
		$this->load->view('admin/includes/header',$data);
		$this->load->view('admin/admin_home');
		$this->load->view('admin/includes/footer');
	}
	public function work_order()
	{
		if ($this->input->method()=='post') 
		{
			$this->form_validation->set_rules('mobile_no','Mobile Number','required');
			if ($this->form_validation->run()=='true')
			 {
			 	$resp=$this->cm->insert_data('bookings',$_POST);
			 	if ($resp) 
			 		$arr=array('status' =>'true' ,'message'=>'Success','reload'=>base_url().'work/work_order' );
			 	else
			 		$arr=array('status' =>'false' ,'message'=>'Failed Try Again' );
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

			$data['page_title']="Work Order";
			$this->load->view('admin/includes/header',$data);
			$this->load->view('admin/request');
			$this->load->view('admin/includes/footer');

		}

		
	}


}
?>