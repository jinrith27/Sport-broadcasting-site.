<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		
		//$this->load->helper('captcha');
		

		//Plugin Files Permission
		$data['PLUGIN_datagrid'] = 0;
		$data['PLUGIN_datepicker'] = 0;
		$data['PLUGIN_gcal'] = 0;
		$data['PLUGIN_form_validation'] = 1;
		$data['PLUGIN_gallery'] = 0;
		$data['PLUGIN_ckeditor'] = 0;
		$data['PLUGIN_floatchart'] = 0;

		//Common Includes
		$data['meta_title'] = DEFAULT_TITLE;
		$data['meta_keywords'] = DEFAULT_META_KEYWORDS;
		$data['meta_description'] = DEFAULT_META_DESCRIPTION;
		
		$data['INC_header_script_top'] = $this->load->view('common/script_header',$data,true);
		$data['INC_header_script_footer'] = $this->load->view('common/script_footer',$data,true);

		$this->load->model('login/mod_login');
		$data['captcha_image'] = $this->mod_login->creat_captcha();
		
		$captcha_param = array(
			/*'img_path' => './assets/captcha/',
			'img_url' => base_url().'assets/captcha/',
			'font_path' => './assets/captcha/fonts/castelar.ttf',
			'img_height' => '60',
			'img_width' => '180'*/
			);
		
		$this->load->view('login/login',$data);
	} //end index()

	public function login_process(){
		if(!$this->input->post()) redirect(base_url());		
		
		$username = trim($this->input->post('username'));
		$password = trim($this->input->post('password'));
		$captcha_code = trim($this->input->post('captcha_code'));
		
		if($username=="" || $password=="" ){
			
			$this->session->set_flashdata('err_message', '- Username or Password is empty. Please try again!');
			redirect(base_url().'login/login');	
		  
		}else{
			$this->load->model('login/mod_login');
			$isvalid_captcha = $this->mod_login->chk_isvalid_captcha($captcha_code);
			
			//if($isvalid_captcha == 0)
			//{

				//$this->session->set_flashdata('err_message', '- Security Code mismatches. Please try again!');
				//redirect(base_url().'login/login');
				
			//}//end if
			
			
			
			$chk_isvalid_user = $this->mod_login->validate_credentials($this->input->post('username'),$this->input->post('password'));
			
			if($chk_isvalid_user){
				
				$login_sess_array = array(
					'logged_in' => true,
					'admin_id' => $chk_isvalid_user['id'],
					'is_sup_admin' => $chk_isvalid_user['is_sup_admin'],
					'display_name'	=>	$chk_isvalid_user['display_name'],
					'email_address'	=>	$chk_isvalid_user['email_address'],
					'admin_role'	=>	$chk_isvalid_user['role_title'],
					'profile_image'	=>	$chk_isvalid_user['profile_image'],
					'last_signin_date'	=>	$chk_isvalid_user['last_signin_date'],
					'permissions' =>  $chk_isvalid_user['permissions'],
					'permissions_arr' =>  explode(';',$chk_isvalid_user['permissions'])
					);
					
				$this->session->set_userdata($login_sess_array);

				//Update Signin Date
				$this->mod_login->update_signin_date($chk_isvalid_user['id']);
				redirect(base_url().'dashboard/dashboard');	
			}
			else
			{

				$this->session->set_flashdata('err_message', '- Invalid Username or Password. Please try again!');
				redirect(base_url().'login/login');
				
			}//end if($chk_isvalid_user) 
			
		} //end if($username=="" || $password=="" )
		
	}//end public function login_process()
	
	//Forgot Password Process
	public function forgot_password_process(){
		
		$this->load->helper(array('email', 'url'));
		
		if(!$this->input->post()) redirect(base_url());		
		
		if(trim($this->input->post('email_address')) != '' && !(valid_email($this->input->post('email_address')))){
			
			$this->session->set_flashdata('err_message', '- Email Address is empty or invalid. Please try again!');
			redirect(base_url().'login/login');	
		  
		}else{

			$this->load->model('login/mod_login');
			$this->load->model('common/mod_common');
			$this->load->model('site_preferences/mod_preferences');
			$this->load->model('admin/mod_admin');
			$this->load->model('email/mod_email');
			
			$chk_isvalid_user = $this->mod_login->verify_email($this->input->post('email_address'));
			
			if($chk_isvalid_user){
				
				//Prepare sending email
				
				//Sending Email to the User
				$send_new_password = $this->mod_login->send_new_password($chk_isvalid_user['id']);
				
				if($send_new_password){

					$this->session->set_flashdata('ok_message', '- New Password sent successfully to your email address. If you do not receive any email please confirm your junk/ spam folders. Else please contact site administrator.');
					redirect(base_url().'login/login');
					
				}else{
					$this->session->set_flashdata('err_message', '- Something went wrong. Please try again!');
					redirect(base_url().'login/login');
					
				}
				
			}else{

				$this->session->set_flashdata('err_message', '- Something went wrong. Please try again!');
				redirect(base_url().'login/login');
				
			}//end if($chk_isvalid_user) 
			
		} //end if($username=="" || $password=="" )
		
	}//end public function forgot_password()
	
	
}

/* End of file */
