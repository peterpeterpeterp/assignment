<?php
include ('db.php');
$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
$input = json_decode(file_get_contents('php://input'),true);

$num_row=0;

switch ($method) {
  case 'GET':
  
	
	 break;
	 
  case 'PUT':
  parse_str(file_get_contents("php://input"),$post_vars);
  $a = $_POST['userid'];
  $sql = "insert into comment (comment) VALUES('$a');";
  $result = mysql_query($sql);
  $num_row = $result; 
  
  
  break;
  
  case 'POST':
  break;
  
  case 'DELETE':
   // $sql = "delete `$table` where id=$key";
   break;
}

echo $num_row;
?>