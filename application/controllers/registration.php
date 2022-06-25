<?php 
defined('BASEPATH') OR exit('No direct scripts allowed');

class Registration extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->('form_validation')
    }

    public function index(){
        echo "call registration function"
    }

    public function add(){
        $this->form->view('reg_form');
    }
}