<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller
{

    public function __construct()
    {
        Parent::__construct();
    }

    public function index()
    {
            $this->template->load('default', "about_us");
    }
}