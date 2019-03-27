<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
 public function __construct()
 {
     parent::__construct();
        $this->load->model('Category_model');
        $this->load->library('session');
 }

    public function index()
    {
        $category=$this->Category_model->get_categories();
        $data=array(
            'title'=>'Platinum Vine|HomePage',
            'category_data'=>$category
        );
        $this->load->view('homepage', $data);
    }
}
