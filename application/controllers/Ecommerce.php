<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ecommerce extends CI_Controller {
    public function index() {
        $this->load->view('ecommerce_view');
    }
}