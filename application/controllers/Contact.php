<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function __construct()
    {
        Parent::__construct();
    }

    public function index()
    {
        $this->template->load('default', "contact");
    }
}

