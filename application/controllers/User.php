<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('User_Model');
    date_default_timezone_set('Asia/Kolkata');
    // $this->load->model('Transaction_Model');
  }

  public function logout(){
    $this->session->sess_destroy();
    header('location:'.base_url().'User');
  }

/**************************      Login      ********************************/
  public function index(){
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    if ($this->form_validation->run() == FALSE) {
    	$this->load->view('User/login');
    } else{
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $login = $this->User_Model->check_login($email, $password);
      // print_r($login);
      if($login == null){
        $this->session->set_flashdata('msg','login_error');
        header('location:'.base_url().'User');
      } else{
        // echo 'null not';
        $this->session->set_userdata('crm_user_id', $login[0]['user_id']);
        $this->session->set_userdata('crm_company_id', $login[0]['company_id']);
        $this->session->set_userdata('crm_roll_id', $login[0]['roll_id']);
        header('location:'.base_url().'User/dashboard');
      }
    }
  }

/**************************      Dashboard      ********************************/
  public function dashboard(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('User/dashboard');
    $this->load->view('Include/footer');
  }

/**************************      Company Information      ********************************/

  // Company List...
  public function company_information_list(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $data['company_list'] = $this->User_Model->get_list($crm_company_id,'company_id','ASC','company');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('User/company_information_list', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit Company...
  public function edit_company($company_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('company_name', 'company_name', 'trim|required');
    $this->form_validation->set_rules('company_address', 'company_address', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $up_data = array(
        'company_name' => $this->input->post('company_name'),
        'company_address' => $this->input->post('company_address'),
        'company_city' => $this->input->post('company_city'),
        'company_state' => $this->input->post('company_state'),
        'company_district' => $this->input->post('company_district'),
        'company_statecode' => $this->input->post('company_statecode'),
        'company_mob1' => $this->input->post('company_mob1'),
        'company_mob2' => $this->input->post('company_mob2'),
        'company_email' => $this->input->post('company_email'),
        'company_website' => $this->input->post('company_website'),
        'company_pan_no' => $this->input->post('company_pan_no'),
        'company_gst_no' => $this->input->post('company_gst_no'),
        'company_lic1' => $this->input->post('company_lic1'),
        'company_lic2' => $this->input->post('company_lic2'),
        'company_start_date' => $this->input->post('company_start_date'),
        'company_end_date' => $this->input->post('company_end_date'),
      );
      $this->User_Model->update_info('company_id', $company_id, 'company', $up_data);
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/company_information_list');
    }
    $company_info = $this->User_Model->get_info('company_id', $company_id, 'company');
    if($company_info){
      foreach($company_info as $info){
        $data['update'] = 'update';
        $data['company_id'] = $info->company_id;
        $data['company_name'] = $info->company_name;
        $data['company_address'] = $info->company_address;
        $data['company_city'] = $info->company_city;
        $data['company_state'] = $info->company_state;
        $data['company_district'] = $info->company_district;
        $data['company_statecode'] = $info->company_statecode;
        $data['company_mob1'] = $info->company_mob1;
        $data['company_mob2'] = $info->company_mob2;
        $data['company_email'] = $info->company_email;
        $data['company_website'] = $info->company_website;
        $data['company_pan_no'] = $info->company_pan_no;
        $data['company_gst_no'] = $info->company_gst_no;
        $data['company_lic1'] = $info->company_lic1;
        $data['company_lic2'] = $info->company_lic2;
        $data['company_start_date'] = $info->company_start_date;
        $data['company_end_date'] = $info->company_end_date;
      }
      $this->load->view('Include/head', $data);
      $this->load->view('Include/navbar', $data);
      $this->load->view('User/company_information', $data);
      $this->load->view('Include/footer', $data);
    }
  }

/**************************************************************************************/
/*******                                Master Forms                          *********/
/**************************************************************************************/


/*******************************    User Information      ****************************/

  // Add New User....
  public function add_user(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('user_name', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = array(
        'company_id' => $crm_company_id,
        'user_name' => $this->input->post('user_name'),
        'user_mobile' => $this->input->post('user_mobile'),
        'user_city' => $this->input->post('user_city'),
        'user_password' => $this->input->post('user_password'),
        'user_addedby' => $crm_user_id,
      );
      $this->User_Model->save_data('user', $save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/user_list');
    }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('User/user');
    $this->load->view('Include/footer');
  }

  // User List....
  public function user_list(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $data['user_list'] = $this->User_Model->user_list($crm_company_id);
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/user_list',$data);
    $this->load->view('Include/footer',$data);
  }

  // Edit User....
  public function edit_user($user_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('user_name', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = array(
        'user_name' => $this->input->post('user_name'),
        'user_mobile' => $this->input->post('user_mobile'),
        'user_email' => $this->input->post('user_email'),
        'user_city' => $this->input->post('user_city'),
        'user_password' => $this->input->post('user_password'),
        'user_addedby' => $crm_user_id,
      );
      $this->User_Model->update_info('user_id', $user_id, 'user', $update_data);
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/user_list');
    }

    $user_info = $this->User_Model->get_info('user_id', $user_id, 'user');
    if($user_info == ''){ header('location:'.base_url().'User/user_list'); }
    foreach($user_info as $info){
      $data['update'] = 'update';
      $data['user_name'] = $info->user_name;
      $data['user_mobile'] = $info->user_mobile;
      $data['user_email'] = $info->user_email;
      $data['user_city'] = $info->user_city;
      $data['user_password'] = $info->user_password;
    }
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/user',$data);
    $this->load->view('Include/footer',$data);
  }

  // Delete User....
  public function delete_user($user_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('user_id', $user_id, 'user');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/user_list');
  }

/***********************     Item Account Group Information      ******************************/

  // Item Account Group List...
  public function item_group_list(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $data['item_group_list'] = $this->User_Model->get_list($crm_company_id,'item_group_id','ASC','item_group');
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/item_group_list',$data);
    $this->load->view('Include/footer',$data);
  }

  // Add Item Account Group...
  public function item_group(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('item_group_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data['item_group_name'] = $this->input->post('item_group_name');
      $save_data['company_id'] = $crm_company_id;
      $save_data['item_group_addedby'] = $crm_user_id;
      $this->User_Model->save_data('item_group', $save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/item_group_list');
    }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('User/item_group');
    $this->load->view('Include/footer');
  }

  // Edit Item Account Group...
  public function edit_item_group($item_group_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('item_group_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data['item_group_name'] = $this->input->post('item_group_name');
      $this->User_Model->update_info('item_group_id', $item_group_id, 'item_group', $update_data);
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/item_group_list');
    }
    $item_group_info = $this->User_Model->get_info_arr('item_group_id',$item_group_id,'item_group');
    if(!$item_group_info){ header('location:'.base_url().'User/item_group_list'); }
    $data['update'] = 'update';
    $data['item_group_name'] = $item_group_info[0]['item_group_name'];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('User/item_group', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete User....
  public function delete_item_group($item_group_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('item_group_id', $item_group_id, 'item_group');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/item_group_list');
  }

/*****************************   Item Account Information   *****************************/

  public function item_account_list(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $data['item_account_list'] = $this->User_Model->get_list($crm_company_id,'item_account_id','ASC','item_account');
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/item_account_list',$data);
    $this->load->view('Include/footer',$data);
  }

  public function item_account(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('item_account_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data['item_group_id'] = $this->input->post('item_group_id');
      $save_data['item_account_name'] = $this->input->post('item_account_name');
      $save_data['company_id'] = $crm_company_id;
      $save_data['item_account_addedby'] = $crm_user_id;
      $this->User_Model->save_data('item_account', $save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/item_account_list');
    }
    $data['item_group_list'] = $this->User_Model->get_list($crm_company_id,'item_group_id','ASC','item_group');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('User/item_account', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit Item Account...
  public function edit_item_account($item_account_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('item_account_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data['item_group_id'] = $this->input->post('item_group_id');
      $update_data['item_account_name'] = $this->input->post('item_account_name');
      $this->User_Model->update_info('item_account_id', $item_account_id, 'item_account', $update_data);
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/item_account_list');
    }
    $item_account_info = $this->User_Model->get_info_arr('item_account_id',$item_account_id,'item_account');
    if(!$item_account_info){ header('location:'.base_url().'User/item_account_list'); }
    $data['update'] = 'update';
    $data['item_group_id'] = $item_account_info[0]['item_group_id'];
    $data['item_account_name'] = $item_account_info[0]['item_account_name'];
    $data['item_group_list'] = $this->User_Model->get_list($crm_company_id,'item_group_id','ASC','item_group');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('User/item_account', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Item Account....
  public function delete_item_account($item_account_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('item_account_id', $item_account_id, 'item_account');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/item_account_list');
  }

/*******************************  Item Category Information  ****************************/

  // Item Category List...
  public function item_category_list(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $data['item_category_list'] = $this->User_Model->get_list($crm_company_id,'item_category_id','ASC','item_category');
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/item_category_list',$data);
    $this->load->view('Include/footer',$data);
  }

  //Add Item Category...
  public function item_category(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('item_category_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data['item_category_name'] = $this->input->post('item_category_name');
      $save_data['company_id'] = $crm_company_id;
      $save_data['item_category_addedby'] = $crm_user_id;
      $this->User_Model->save_data('item_category', $save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/item_category_list');
    }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('User/item_category');
    $this->load->view('Include/footer');
  }

  // Edit Item Category...
  public function edit_item_category($item_category_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('item_category_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data['item_category_name'] = $this->input->post('item_category_name');
      $this->User_Model->update_info('item_category_id', $item_category_id, 'item_category', $update_data);
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/item_category_list');
    }
    $item_category_info = $this->User_Model->get_info_arr('item_category_id',$item_category_id,'item_category');
    if(!$item_category_info){ header('location:'.base_url().'User/item_category_list'); }
    $data['update'] = 'update';
    $data['item_category_name'] = $item_category_info[0]['item_category_name'];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('User/item_category', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Item Category....
  public function delete_item_category($item_category_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('item_category_id', $item_category_id, 'item_category');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/item_category_list');
  }


/*******************************  Tags Information  ****************************/

  // Tags List...
  public function tags_list(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $data['tags_list'] = $this->User_Model->get_list($crm_company_id,'tags_id','ASC','tags');
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/tags_list',$data);
    $this->load->view('Include/footer',$data);
  }

  //Add Tags
  public function tags(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('tags_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data['tags_name'] = $this->input->post('tags_name');
      $save_data['company_id'] = $crm_company_id;
      $save_data['tags_addedby'] = $crm_user_id;
      $this->User_Model->save_data('tags', $save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/tags_list');
    }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('User/tags');
    $this->load->view('Include/footer');
  }

  // Edit Tags...
  public function edit_tags($tags_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('tags_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data['tags_name'] = $this->input->post('tags_name');
      $this->User_Model->update_info('tags_id', $tags_id, 'tags', $update_data);
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/tags_list');
    }
    $tags_info = $this->User_Model->get_info_arr('tags_id',$tags_id,'tags');
    if(!$tags_info){ header('location:'.base_url().'User/tags_list'); }
    $data['update'] = 'update';
    $data['tags_name'] = $tags_info[0]['tags_name'];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('User/tags', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Tags....
  public function delete_tags($tags_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('tags_id', $tags_id, 'tags');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/tags_list');
  }

/*******************************  Unit Information  ****************************/

  // Unit List...
  public function unit_list(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $data['unit_list'] = $this->User_Model->get_list($crm_company_id,'unit_name','ASC','unit');
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/unit_list',$data);
    $this->load->view('Include/footer',$data);
  }

  //Add Unit
  public function unit(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('unit_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data['unit_name'] = $this->input->post('unit_name');
      $save_data['company_id'] = $crm_company_id;
      $save_data['unit_addedby'] = $crm_user_id;
      $this->User_Model->save_data('unit', $save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/unit_list');
    }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('User/unit');
    $this->load->view('Include/footer');
  }

  // Edit Unit...
  public function edit_unit($unit_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('unit_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data['unit_name'] = $this->input->post('unit_name');
      $this->User_Model->update_info('unit_id', $unit_id, 'unit', $update_data);
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/unit_list');
    }
    $unit_info = $this->User_Model->get_info_arr('unit_id',$unit_id,'unit');
    if(!$unit_info){ header('location:'.base_url().'User/unit_list'); }
    $data['update'] = 'update';
    $data['unit_name'] = $unit_info[0]['unit_name'];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('User/unit', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Unit....
  public function delete_unit($unit_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('unit_id', $unit_id, 'unit');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/unit_list');
  }

/**************************************************************************************/
/*******                           Manage Forms                               *********/
/**************************************************************************************/

/***************************      Customer Information     *****************************/

  public function customer_list(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $data['customer_list'] = $this->User_Model->get_list($crm_company_id,'customer_id','DESC','customer');
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/customer_list',$data);
    $this->load->view('Include/footer',$data);
  }

  public function customer(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('customer_company', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $date_time = date('d-m-Y H:i:s A');
      $composition_scheme = $this->input->post('composition_scheme');
      if(!isset($composition_scheme)){ $composition_scheme = 0; }
      $is_addr_same = $this->input->post('is_addr_same');
      if(!isset($is_addr_same)){ $is_addr_same = 0; }
      $customer_status = $this->input->post('customer_status');
      if(!isset($customer_status)){ $customer_status = 0; }
      $save_data = array(
        'company_id' => $crm_company_id,
        'customer_company' => $this->input->post('customer_company'),
        'customer_name' => $this->input->post('customer_name'),
        'customer_display_name' => $this->input->post('customer_display_name'),
        'customer_gstin' => $this->input->post('customer_gstin'),
        'customer_pan' => $this->input->post('customer_pan'),
        'composition_scheme' => $composition_scheme,
        'customer_tds' => $this->input->post('customer_tds'),
        'customer_mobile' => $this->input->post('customer_mobile'),
        'customer_phone' => $this->input->post('customer_phone'),
        'customer_email' => $this->input->post('customer_email'),
        'tags_id' => $this->input->post('tags_id'),
        'ratesheet_id' => $this->input->post('ratesheet_id'),
        'customer_addr1' => $this->input->post('customer_addr1'),
        'customer_addr2' => $this->input->post('customer_addr2'),
        'customer_city' => $this->input->post('customer_city'),
        'customer_pin' => $this->input->post('customer_pin'),
        'country_id' => $this->input->post('country_id'),
        'state_id' => $this->input->post('state_id'),
        'is_addr_same' => $is_addr_same,
        'customer_status' => $customer_status,
        'customer_addedby' => $crm_user_id,
        'customer_added_date' => $date_time,
        'customer_updateby' => $crm_user_id,
        'customer_update_date' => $date_time,
      );
      // Shipping Address...
      if($is_addr_same == 1){
        $save_data['customer_s_addr1'] = $this->input->post('customer_addr1');
        $save_data['customer_s_addr2'] = $this->input->post('customer_addr2');
        $save_data['customer_s_city'] = $this->input->post('customer_city');
        $save_data['customer_s_pin'] = $this->input->post('customer_pin');
        $save_data['country_s_id'] = $this->input->post('country_id');
        $save_data['state_s_id'] = $this->input->post('state_id');
      } else{
        $save_data['customer_s_addr1'] = $this->input->post('customer_s_addr1');
        $save_data['customer_s_addr2'] = $this->input->post('customer_s_addr2');
        $save_data['customer_s_city'] = $this->input->post('customer_s_city');
        $save_data['customer_s_pin'] = $this->input->post('customer_s_pin');
        $save_data['country_s_id'] = $this->input->post('country_s_id');
        $save_data['state_s_id'] = $this->input->post('state_s_id');
      }
      $this->User_Model->save_data('customer', $save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/customer_list');
    }
    $data['tags_list'] = $this->User_Model->get_list($crm_company_id,'tags_id','ASC','tags');
    $data['country_list'] = $this->User_Model->get_list('','country_name','ASC','country');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('User/customer', $data);
    $this->load->view('Include/footer', $data);
  }

// Edit Customer...
  public function edit_customer($customer_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('customer_company', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $date_time = date('d-m-Y H:i:s A');

      $composition_scheme = $this->input->post('composition_scheme');
      if(!isset($composition_scheme)){ $composition_scheme = 0; }
      $is_addr_same = $this->input->post('is_addr_same');
      if(!isset($is_addr_same)){ $is_addr_same = 0; }
      $customer_status = $this->input->post('customer_status');
      if(!isset($customer_status)){ $customer_status = 0; }
      $update_data = array(
        'customer_company' => $this->input->post('customer_company'),
        'customer_name' => $this->input->post('customer_name'),
        'customer_display_name' => $this->input->post('customer_display_name'),
        'customer_gstin' => $this->input->post('customer_gstin'),
        'customer_pan' => $this->input->post('customer_pan'),
        'composition_scheme' => $composition_scheme,
        'customer_tds' => $this->input->post('customer_tds'),
        'customer_mobile' => $this->input->post('customer_mobile'),
        'customer_phone' => $this->input->post('customer_phone'),
        'customer_email' => $this->input->post('customer_email'),
        'tags_id' => $this->input->post('tags_id'),
        'ratesheet_id' => $this->input->post('ratesheet_id'),
        'customer_addr1' => $this->input->post('customer_addr1'),
        'customer_addr2' => $this->input->post('customer_addr2'),
        'customer_city' => $this->input->post('customer_city'),
        'customer_pin' => $this->input->post('customer_pin'),
        'country_id' => $this->input->post('country_id'),
        'state_id' => $this->input->post('state_id'),
        'is_addr_same' => $is_addr_same,
        'customer_s_addr1' => $this->input->post('customer_s_addr1'),
        'customer_s_addr2' => $this->input->post('customer_s_addr2'),
        'customer_s_city' => $this->input->post('customer_s_city'),
        'customer_s_pin' => $this->input->post('customer_s_pin'),
        'country_s_id' => $this->input->post('country_s_id'),
        'state_s_id' => $this->input->post('state_s_id'),
        'customer_status' => $customer_status,
        'customer_updateby' => $crm_user_id,
        'customer_update_date' => $date_time,
      );
      // Shipping Address...
      if($is_addr_same == 1){
        $update_data['customer_s_addr1'] = $this->input->post('customer_addr1');
        $update_data['customer_s_addr2'] = $this->input->post('customer_addr2');
        $update_data['customer_s_city'] = $this->input->post('customer_city');
        $update_data['customer_s_pin'] = $this->input->post('customer_pin');
        $update_data['country_s_id'] = $this->input->post('country_id');
        $update_data['state_s_id'] = $this->input->post('state_id');
      } else{
        $update_data['customer_s_addr1'] = $this->input->post('customer_s_addr1');
        $update_data['customer_s_addr2'] = $this->input->post('customer_s_addr2');
        $update_data['customer_s_city'] = $this->input->post('customer_s_city');
        $update_data['customer_s_pin'] = $this->input->post('customer_s_pin');
        $update_data['country_s_id'] = $this->input->post('country_s_id');
        $update_data['state_s_id'] = $this->input->post('state_s_id');
      }
      $this->User_Model->update_info('customer_id', $customer_id, 'customer', $update_data);
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/customer_list');
    }
    // Edit Fetch Data...
    $data['tags_list'] = $this->User_Model->get_list($crm_company_id,'tags_id','ASC','tags');
    $data['country_list'] = $this->User_Model->get_list('','country_name','ASC','country');
    $customer_info = $this->User_Model->get_info_arr('customer_id',$customer_id,'customer');
    if(!$customer_info){ header('location:'.base_url().'User/customer_list'); }
    $data['update'] = 'update';
    $data['customer_info'] = $customer_info[0];
    $country_id = $customer_info[0]['country_id'];
    if(isset($country_id)){
      $data['state_list'] = $this->User_Model->get_list_by_id('country_id',$country_id,'','','state_name','ASC','state');
    }
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('User/customer', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Tags....
  public function delete_customer($customer_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('customer_id', $customer_id, 'customer');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/customer_list');
  }

/**********************      Suppliers Information      *****************************/

  // Suppliers List...
  public function supplier_list(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $data['supplier_list'] = $this->User_Model->get_list($crm_company_id,'supplier_id','DESC','supplier');
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/supplier_list',$data);
    $this->load->view('Include/footer',$data);
  }

  // Add Supplier...
  public function supplier(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('supplier_company', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $date_time = date('d-m-Y H:i:s A');
      $composition_scheme = $this->input->post('composition_scheme');
      if(!isset($composition_scheme)){ $composition_scheme = 0; }
      $is_addr_same = $this->input->post('is_addr_same');
      if(!isset($is_addr_same)){ $is_addr_same = 0; }
      $supplier_status = $this->input->post('supplier_status');
      if(!isset($supplier_status)){ $supplier_status = 0; }
      $save_data = array(
        'company_id' => $crm_company_id,
        'supplier_company' => $this->input->post('supplier_company'),
        'supplier_name' => $this->input->post('supplier_name'),
        'supplier_display_name' => $this->input->post('supplier_display_name'),
        'supplier_gstin' => $this->input->post('supplier_gstin'),
        'supplier_pan' => $this->input->post('supplier_pan'),
        'composition_scheme' => $composition_scheme,
        'supplier_tds' => $this->input->post('supplier_tds'),
        'supplier_mobile' => $this->input->post('supplier_mobile'),
        'supplier_phone' => $this->input->post('supplier_phone'),
        'supplier_email' => $this->input->post('supplier_email'),
        'tags_id' => $this->input->post('tags_id'),
        'supplier_addr1' => $this->input->post('supplier_addr1'),
        'supplier_addr2' => $this->input->post('supplier_addr2'),
        'supplier_city' => $this->input->post('supplier_city'),
        'supplier_pin' => $this->input->post('supplier_pin'),
        'country_id' => $this->input->post('country_id'),
        'state_id' => $this->input->post('state_id'),
        'is_addr_same' => $is_addr_same,
        'supplier_status' => $supplier_status,
        'supplier_addedby' => $crm_user_id,
        'supplier_added_date' => $date_time,
        'supplier_updateby' => $crm_user_id,
        'supplier_update_date' => $date_time,
      );
      // Shipping Address...
      if($is_addr_same == 1){
        $save_data['supplier_s_addr1'] = $this->input->post('supplier_addr1');
        $save_data['supplier_s_addr2'] = $this->input->post('supplier_addr2');
        $save_data['supplier_s_city'] = $this->input->post('supplier_city');
        $save_data['supplier_s_pin'] = $this->input->post('supplier_pin');
        $save_data['country_s_id'] = $this->input->post('country_id');
        $save_data['state_s_id'] = $this->input->post('state_id');
      } else{
        $save_data['supplier_s_addr1'] = $this->input->post('supplier_s_addr1');
        $save_data['supplier_s_addr2'] = $this->input->post('supplier_s_addr2');
        $save_data['supplier_s_city'] = $this->input->post('supplier_s_city');
        $save_data['supplier_s_pin'] = $this->input->post('supplier_s_pin');
        $save_data['country_s_id'] = $this->input->post('country_s_id');
        $save_data['state_s_id'] = $this->input->post('state_s_id');
      }
      $this->User_Model->save_data('supplier', $save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/supplier_list');
    }
    $data['tags_list'] = $this->User_Model->get_list($crm_company_id,'tags_id','ASC','tags');
    $data['country_list'] = $this->User_Model->get_list('','country_name','ASC','country');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('User/supplier', $data);
    $this->load->view('Include/footer', $data);
  }

// Edit Supplier...
  public function edit_supplier($supplier_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('supplier_company', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $date_time = date('d-m-Y H:i:s A');

      $composition_scheme = $this->input->post('composition_scheme');
      if(!isset($composition_scheme)){ $composition_scheme = 0; }
      $is_addr_same = $this->input->post('is_addr_same');
      if(!isset($is_addr_same)){ $is_addr_same = 0; }
      $supplier_status = $this->input->post('supplier_status');
      if(!isset($supplier_status)){ $supplier_status = 0; }
      $update_data = array(
        'supplier_company' => $this->input->post('supplier_company'),
        'supplier_name' => $this->input->post('supplier_name'),
        'supplier_display_name' => $this->input->post('supplier_display_name'),
        'supplier_gstin' => $this->input->post('supplier_gstin'),
        'supplier_pan' => $this->input->post('supplier_pan'),
        'composition_scheme' => $composition_scheme,
        'supplier_tds' => $this->input->post('supplier_tds'),
        'supplier_mobile' => $this->input->post('supplier_mobile'),
        'supplier_phone' => $this->input->post('supplier_phone'),
        'supplier_email' => $this->input->post('supplier_email'),
        'tags_id' => $this->input->post('tags_id'),
        'supplier_addr1' => $this->input->post('supplier_addr1'),
        'supplier_addr2' => $this->input->post('supplier_addr2'),
        'supplier_city' => $this->input->post('supplier_city'),
        'supplier_pin' => $this->input->post('supplier_pin'),
        'country_id' => $this->input->post('country_id'),
        'state_id' => $this->input->post('state_id'),
        'is_addr_same' => $is_addr_same,
        'supplier_s_addr1' => $this->input->post('supplier_s_addr1'),
        'supplier_s_addr2' => $this->input->post('supplier_s_addr2'),
        'supplier_s_city' => $this->input->post('supplier_s_city'),
        'supplier_s_pin' => $this->input->post('supplier_s_pin'),
        'country_s_id' => $this->input->post('country_s_id'),
        'state_s_id' => $this->input->post('state_s_id'),
        'supplier_status' => $supplier_status,
        'supplier_updateby' => $crm_user_id,
        'supplier_update_date' => $date_time,
      );
      // Shipping Address...
      if($is_addr_same == 1){
        $update_data['supplier_s_addr1'] = $this->input->post('supplier_addr1');
        $update_data['supplier_s_addr2'] = $this->input->post('supplier_addr2');
        $update_data['supplier_s_city'] = $this->input->post('supplier_city');
        $update_data['supplier_s_pin'] = $this->input->post('supplier_pin');
        $update_data['country_s_id'] = $this->input->post('country_id');
        $update_data['state_s_id'] = $this->input->post('state_id');
      } else{
        $update_data['supplier_s_addr1'] = $this->input->post('supplier_s_addr1');
        $update_data['supplier_s_addr2'] = $this->input->post('supplier_s_addr2');
        $update_data['supplier_s_city'] = $this->input->post('supplier_s_city');
        $update_data['supplier_s_pin'] = $this->input->post('supplier_s_pin');
        $update_data['country_s_id'] = $this->input->post('country_s_id');
        $update_data['state_s_id'] = $this->input->post('state_s_id');
      }
      $this->User_Model->update_info('supplier_id', $supplier_id, 'supplier', $update_data);
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/supplier_list');
    }
    // Edit Fetch Data...
    $data['tags_list'] = $this->User_Model->get_list($crm_company_id,'tags_id','ASC','tags');
    $data['country_list'] = $this->User_Model->get_list('','country_name','ASC','country');
    $supplier_info = $this->User_Model->get_info_arr('supplier_id',$supplier_id,'supplier');
    if(!$supplier_info){ header('location:'.base_url().'User/supplier_list'); }
    $data['update'] = 'update';
    $data['supplier_info'] = $supplier_info[0];
    $country_id = $supplier_info[0]['country_id'];
    if(isset($country_id)){
      $data['state_list'] = $this->User_Model->get_list_by_id('country_id',$country_id,'','','state_name','ASC','state');
    }
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('User/supplier', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Supplier....
  public function delete_supplier($supplier_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('supplier_id', $supplier_id, 'supplier');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/supplier_list');
  }

/**********************     Item Information      **********************/

  // Items List...
  public function item_list(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $data['item_list'] = $this->User_Model->get_list($crm_company_id,'item_name','ASC','item');
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/item_list',$data);
    $this->load->view('Include/footer',$data);
  }

  //Add Item
  public function item(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('item_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $date_time = date('d-m-Y H:i:s A');
      $in_sales = $this->input->post('in_sales');
      if(!isset($in_sales)){ $in_sales = 0; }
      $in_purchase = $this->input->post('in_purchase');
      if(!isset($in_purchase)){ $in_purchase = 0; }
      $item_purchase_itc = $this->input->post('item_purchase_itc');
      if(!isset($item_purchase_itc)){ $item_purchase_itc = 0; }
      $item_track_inv = $this->input->post('item_track_inv');
      if(!isset($item_track_inv)){ $item_track_inv = 0; }
      $item_status = $this->input->post('item_status');
      if(!isset($item_status)){ $item_status = 0; }
      $save_data = array(
        'company_id' => $crm_company_id,
        'item_name' => $this->input->post('item_name'),
        'item_type' => $this->input->post('item_type'),
        'in_sales' => $in_sales,
        'item_sale_rate' => $this->input->post('item_sale_rate'),
        'item_sale_discount' => $this->input->post('item_sale_discount'),
        'item_sale_desc' => $this->input->post('item_sale_desc'),
        'sale_account_id' => $this->input->post('sale_account_id'),
        'in_purchase' => $in_purchase,
        'item_purchase_rate' => $this->input->post('item_purchase_rate'),
        'item_purchase_itc' => $item_purchase_itc,
        'item_purchase_desc' => $this->input->post('item_purchase_desc'),
        'purchase_account_id' => $this->input->post('purchase_account_id'),
        'unit_id' => $this->input->post('unit_id'),
        'item_barcode' => $this->input->post('item_barcode'),
        'tax_id' => $this->input->post('tax_id'),
        'item_category_id' => $this->input->post('item_category_id'),
        'item_track_inv' => $item_track_inv,
        'stock_alert_level' => $this->input->post('stock_alert_level'),
        'item_hsn' => $this->input->post('item_hsn'),
        'item_hsn' => $this->input->post('item_hsn'),
        'item_hsn' => $this->input->post('item_hsn'),
        'item_status' => $item_status,
        'item_addedby' => $crm_user_id,
        'item_added_date' => $date_time,
        'item_updateby' => $crm_user_id,
        'item_update_date' => $date_time,
      );
      $this->User_Model->save_data('item', $save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/item_list');
    }
    $data['item_account_list'] = $this->User_Model->get_list($crm_company_id,'item_account_id','ASC','item_account');
    $data['item_category_list'] = $this->User_Model->get_list($crm_company_id,'item_category_id','ASC','item_category');
    $data['unit_list'] = $this->User_Model->get_list($crm_company_id,'unit_name','ASC','unit');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('User/item', $data);
    $this->load->view('Include/footer', $data);
  }

  public function edit_item($item_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('item_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $date_time = date('d-m-Y H:i:s A');
      $in_sales = $this->input->post('in_sales');
      if(!isset($in_sales)){ $in_sales = 0; }
      $in_purchase = $this->input->post('in_purchase');
      if(!isset($in_purchase)){ $in_purchase = 0; }
      $item_purchase_itc = $this->input->post('item_purchase_itc');
      if(!isset($item_purchase_itc)){ $item_purchase_itc = 0; }
      $item_track_inv = $this->input->post('item_track_inv');
      if(!isset($item_track_inv)){ $item_track_inv = 0; }
      $item_status = $this->input->post('item_status');
      if(!isset($item_status)){ $item_status = 0; }
      $update_data = array(
        'item_name' => $this->input->post('item_name'),
        'item_type' => $this->input->post('item_type'),
        'in_sales' => $in_sales,
        'item_sale_rate' => $this->input->post('item_sale_rate'),
        'item_sale_discount' => $this->input->post('item_sale_discount'),
        'item_sale_desc' => $this->input->post('item_sale_desc'),
        'sale_account_id' => $this->input->post('sale_account_id'),
        'in_purchase' => $in_purchase,
        'item_purchase_rate' => $this->input->post('item_purchase_rate'),
        'item_purchase_itc' => $item_purchase_itc,
        'item_purchase_desc' => $this->input->post('item_purchase_desc'),
        'purchase_account_id' => $this->input->post('purchase_account_id'),
        'unit_id' => $this->input->post('unit_id'),
        'item_barcode' => $this->input->post('item_barcode'),
        'tax_id' => $this->input->post('tax_id'),
        'item_category_id' => $this->input->post('item_category_id'),
        'item_track_inv' => $item_track_inv,
        'stock_alert_level' => $this->input->post('stock_alert_level'),
        'item_hsn' => $this->input->post('item_hsn'),
        'item_hsn' => $this->input->post('item_hsn'),
        'item_hsn' => $this->input->post('item_hsn'),
        'item_status' => $item_status,
        'item_updateby' => $crm_user_id,
        'item_update_date' => $date_time,
      );
      $this->User_Model->update_info('item_id', $item_id, 'item', $update_data);
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/item_list');
    }
    $data['item_account_list'] = $this->User_Model->get_list($crm_company_id,'item_account_id','ASC','item_account');
    $data['item_category_list'] = $this->User_Model->get_list($crm_company_id,'item_category_id','ASC','item_category');
    $data['unit_list'] = $this->User_Model->get_list($crm_company_id,'unit_name','ASC','unit');
    $item_info = $this->User_Model->get_info_arr('item_id',$item_id,'item');
    if(!$item_info){ header('location:'.base_url().'User/item_list'); }
    $data['update'] = 'update';
    $data['item_info'] = $item_info[0];
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('User/item', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Item....
  public function delete_item($item_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('item_id', $item_id, 'item');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/item_list');
  }

/*******************************  Stock Information  ****************************/

  // Stock List...
  public function stock_list(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $data['stock_list'] = $this->User_Model->user_list($crm_company_id);
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/stock_list',$data);
    $this->load->view('Include/footer',$data);
  }

  //Add Stock
  public function stock(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('User/stock');
    $this->load->view('Include/footer');
  }




/****************************    crn Stystem ****************/


// Issue List...
public function issue_information_list(){
  $crm_user_id = $this->session->userdata('crm_user_id');
  $crm_company_id = $this->session->userdata('crm_company_id');
  $crm_roll_id = $this->session->userdata('crm_roll_id');
  if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
  $data['issue_information_list'] = $this->User_Model->user_list($crm_company_id);
  $this->load->view('Include/head',$data);
  $this->load->view('Include/navbar',$data);
  $this->load->view('User/issue_information_list',$data);
  $this->load->view('Include/footer',$data);
}

//Add Stock
public function issue_information(){
  $crm_user_id = $this->session->userdata('crm_user_id');
  $crm_company_id = $this->session->userdata('crm_company_id');
  $crm_roll_id = $this->session->userdata('crm_roll_id');
  if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
  $this->load->view('Include/head');
  $this->load->view('Include/navbar');
  $this->load->view('User/issue_information');
  $this->load->view('Include/footer');
}



// Issue List...
public function task_information_list(){
  $crm_user_id = $this->session->userdata('crm_user_id');
  $crm_company_id = $this->session->userdata('crm_company_id');
  $crm_roll_id = $this->session->userdata('crm_roll_id');
  if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
  $data['task_information_list'] = $this->User_Model->user_list($crm_company_id);
  $this->load->view('Include/head',$data);
  $this->load->view('Include/navbar',$data);
  $this->load->view('User/task_information_list',$data);
  $this->load->view('Include/footer',$data);
}

//Add Stock
public function task_information(){
  $crm_user_id = $this->session->userdata('crm_user_id');
  $crm_company_id = $this->session->userdata('crm_company_id');
  $crm_roll_id = $this->session->userdata('crm_roll_id');
  if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
  $this->load->view('Include/head');
  $this->load->view('Include/navbar');
  $this->load->view('User/task_information');
  $this->load->view('Include/footer');
}

// Issue List...
public function service_information_list(){
  $crm_user_id = $this->session->userdata('crm_user_id');
  $crm_company_id = $this->session->userdata('crm_company_id');
  $crm_roll_id = $this->session->userdata('crm_roll_id');
  if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
  $data['service_information_list'] = $this->User_Model->user_list($crm_company_id);
  $this->load->view('Include/head',$data);
  $this->load->view('Include/navbar',$data);
  $this->load->view('User/service_information_list',$data);
  $this->load->view('Include/footer',$data);
}

//Add Stock
public function service_information(){
  $crm_user_id = $this->session->userdata('crm_user_id');
  $crm_company_id = $this->session->userdata('crm_company_id');
  $crm_roll_id = $this->session->userdata('crm_roll_id');
  if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
  $this->load->view('Include/head');
  $this->load->view('Include/navbar');
  $this->load->view('User/service_information');
  $this->load->view('Include/footer');
}


// Issue List...
public function ticket_information_list(){
  $crm_user_id = $this->session->userdata('crm_user_id');
  $crm_company_id = $this->session->userdata('crm_company_id');
  $crm_roll_id = $this->session->userdata('crm_roll_id');
  if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
  $data['ticket_information_list'] = $this->User_Model->user_list($crm_company_id);
  $this->load->view('Include/head',$data);
  $this->load->view('Include/navbar',$data);
  $this->load->view('User/ticket_information_list',$data);
  $this->load->view('Include/footer',$data);
}

//Add Stock
public function ticket_information(){
  $crm_user_id = $this->session->userdata('crm_user_id');
  $crm_company_id = $this->session->userdata('crm_company_id');
  $crm_roll_id = $this->session->userdata('crm_roll_id');
  if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
  $this->load->view('Include/head');
  $this->load->view('Include/navbar');
  $this->load->view('User/ticket_information');
  $this->load->view('Include/footer');
}


// Issue List...
public function project_information_list(){
  $crm_user_id = $this->session->userdata('crm_user_id');
  $crm_company_id = $this->session->userdata('crm_company_id');
  $crm_roll_id = $this->session->userdata('crm_roll_id');
  if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
  $data['project_information_list'] = $this->User_Model->user_list($crm_company_id);
  $this->load->view('Include/head',$data);
  $this->load->view('Include/navbar',$data);
  $this->load->view('User/project_information_list',$data);
  $this->load->view('Include/footer',$data);
}

//Add Stock
public function project_information(){
  $crm_user_id = $this->session->userdata('crm_user_id');
  $crm_company_id = $this->session->userdata('crm_company_id');
  $crm_roll_id = $this->session->userdata('crm_roll_id');
  if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
  $this->load->view('Include/head');
  $this->load->view('Include/navbar');
  $this->load->view('User/project_information');
  $this->load->view('Include/footer');
}

// Issue List...
public function lead_information_list(){
  $crm_user_id = $this->session->userdata('crm_user_id');
  $crm_company_id = $this->session->userdata('crm_company_id');
  $crm_roll_id = $this->session->userdata('crm_roll_id');
  if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
  $data['lead_information_list'] = $this->User_Model->user_list($crm_company_id);
  $this->load->view('Include/head',$data);
  $this->load->view('Include/navbar',$data);
  $this->load->view('User/lead_information_list',$data);
  $this->load->view('Include/footer',$data);
}

//Add Stock
public function lead_information(){
  $crm_user_id = $this->session->userdata('crm_user_id');
  $crm_company_id = $this->session->userdata('crm_company_id');
  $crm_roll_id = $this->session->userdata('crm_roll_id');
  if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
  $this->load->view('Include/head');
  $this->load->view('Include/navbar');
  $this->load->view('User/lead_information');
  $this->load->view('Include/footer');
}



// Issue List...
public function contract_information_list(){
  $crm_user_id = $this->session->userdata('crm_user_id');
  $crm_company_id = $this->session->userdata('crm_company_id');
  $crm_roll_id = $this->session->userdata('crm_roll_id');
  if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
  $data['contract_information_list'] = $this->User_Model->user_list($crm_company_id);
  $this->load->view('Include/head',$data);
  $this->load->view('Include/navbar',$data);
  $this->load->view('User/contract_information_list',$data);
  $this->load->view('Include/footer',$data);
}

//Add Stock
public function contract_information(){
  $crm_user_id = $this->session->userdata('crm_user_id');
  $crm_company_id = $this->session->userdata('crm_company_id');
  $crm_roll_id = $this->session->userdata('crm_roll_id');
  if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
  $this->load->view('Include/head');
  $this->load->view('Include/navbar');
  $this->load->view('User/contract_information');
  $this->load->view('Include/footer');
}








/*******************************  Check Duplication  ****************************/
  public function check_duplication(){
    $column_name = $this->input->post('column_name');
    $column_val = $this->input->post('column_val');
    $table_name = $this->input->post('table_name');
    $company_id = '';
    $cnt = $this->User_Model->check_dupli_num($company_id,$column_val,$column_name,$table_name);
    echo $cnt;
  }

  public function get_state_by_country(){
    $country_id = $this->input->post('country_id');
    $state_list = $this->User_Model->get_list_by_id('country_id',$country_id,'','','state_name','ASC','state');
    echo "<option value='' selected >Select State.</option>";
    foreach ($state_list as $list) {
      echo "<option value='".$list->state_id."'> ".$list->state_name." </option>";
    }
  }



}
?>
