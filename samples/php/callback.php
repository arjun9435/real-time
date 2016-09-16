<?php                                    
define('VERIFY_TOKEN', 'databeat_token#jfgshd838723');                                    
$method = $_SERVER['REQUEST_METHOD'];                             
if ($method == 'GET' && $_GET['hub_mode'] == 'subscribe' &&       
    $_GET['hub_verify_token'] == VERIFY_TOKEN) {
  echo $_GET['hub_challenge'];
} else if ($method == 'POST') {                                   
  $updates = json_decode(file_get_contents("php://input"), true); 
  error_log('updates = ' . print_r($updates, true));              
}
