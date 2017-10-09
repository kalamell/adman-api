<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Backend_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->_render('main', $this);
    }
    public function _404()
    {
        $this->load->view('404');
    }
}
