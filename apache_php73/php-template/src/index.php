<?php 


  error_reporting(0); 
highlight_file(__FILE__); 
include('flag.php'); 

class ctfuser{ 
  public $username='xxxxxx'; 
  public $password='xxxxxx'; 
  public $isVip=false; 

  public function checkVip(){ 
    return $this->isVip; 
  } 
  public function login($u,$p){ 
    return $this->username===$u&&$this->password===$p; 
  } 
  public function vipOneKeyGetFlag(){ 
    if($this->isVip){ 
      global $flag; 
      echo "your flag is ".$flag; 
    }else{ 
      echo "no vip, no flag"; 
    } 
  } 
} 

$username=$_GET['username']; 
$password=$_GET['password']; 

if(isset($username) && isset($password)){ 
  $user = unserialize($_COOKIE['user']);     
  if($user->login($username,$password)){ 
    if($user->checkVip()){ 
      $user->vipOneKeyGetFlag(); 
    } 
  }else{ 
    echo "no vip,no flag"; 
  } 
} 