<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class ChartController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
       $this->load->helper('url');
        $this->load->model('Chart_Model');
    }

    public function index()
    {
      $data['read1'] = $this->Chart_Model->getCheck();
      $this->load->view('header');
      $this->load->view('menu');
      $this->load->view('Chart_View',$data);
      $this->load->view('footer');
    }

     public function daftar_data()
    {
        $this->Chart_Model->getData();
    }   
   

    
    
}