<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('User_Model');
    $this->load->model('Transaction_Model');
    date_default_timezone_set('Asia/Kolkata');
  }

  /**************************************************************************************/
  /*******                                  Sales                               *********/
  /**************************************************************************************/


  /*******************************    Quote Information      ****************************/
  public function quote_list(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $data['quote_list'] = $this->User_Model->user_list($crm_company_id);
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('Transaction/quote_list',$data);
    $this->load->view('Include/footer',$data);
  }

  public function quote(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_roll_id = $this->session->userdata('crm_roll_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $data['quote_list'] = $this->User_Model->user_list($crm_company_id);
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('Transaction/quote',$data);
    $this->load->view('Include/footer',$data);
  }
}
