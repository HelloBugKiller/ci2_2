<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct(){
        parent::__construct();      
        $this->load->model('user');
    }
     
	public function login()
	{
        $this->load->view('templates/header');
        $user_login_information = $this->input->post();
        if ($user_login_information )
        {
            print_r($user_login_information);
        }
        else
        {
		    $this->load->view('pages/login');
        }
		$this->load->view('templates/footer');
	}
    public function register()
    {
        // $this->output->enable_profiler(TRUE);
        
        $this->load->view('templates/header');
        
        $user_register_information= $this->input->post();
        if ($user_register_information)
        {
            $this->user->insert_user($user_register_information); 
        }
        else
        {
		    $this->load->view('pages/register');
        } 		
		$this->load->view('templates/footer');
    }
    public function message()
    {
        $this->load->view('templates/header');
		$this->load->view('pages/message');
		$this->load->view('templates/footer');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
