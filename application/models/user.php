<?php
class User extends CI_Model{
    private $user_name;
    private $password;
    private $create_time;
    private $login_time;
    private $remember_me;
    
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function insert_user($insert_data){
        $this->user_name     = $insert_data['user_name'];
        $this->password      = $insert_data['password'];
        $this->create_time   = time();
        $this->login_time    = time();
        $this->remember_me   = 0;
        
        $this->db->insert('user',$this);
    }


?>
