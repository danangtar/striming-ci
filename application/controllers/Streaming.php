<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Streaming extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title'] = ucfirst("Streaming"); // Capitalize the first letter

        $this->load->view('streaming/templates/header', $data);
        $this->load->view('streaming/home');
        $this->load->view('streaming/templates/footer');
	}
    
    public function http()
	{
		$data['title'] = ucfirst("HTTP Streaming"); // Capitalize the first letter

        $this->load->view('streaming/templates/header', $data);
        $this->load->view('streaming/http');
        $this->load->view('streaming/templates/footer');
	}
    
    public function rtmp()
	{
		$data['title'] = ucfirst("RTMP Streaming"); // Capitalize the first letter

        $this->load->view('streaming/templates/header', $data);
        $this->load->view('streaming/rtmp');
        $this->load->view('streaming/templates/footer');
	}
}
