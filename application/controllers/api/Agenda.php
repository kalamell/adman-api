<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $rs = $this->db->order_by('id', 'ASC')->get('agenda')->result_array();
        echo json_encode( array('response' => $rs ) );
    }
}
