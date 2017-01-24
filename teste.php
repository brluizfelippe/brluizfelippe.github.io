<?php
 ob_start();
 session_start();
 echo $_GET['id']; 
 $myData = array();
 $myIndex = 0;
 $param = array();
require_once 'js/views/dbconnectAzure.php';
	
if ($conn){
    echo "connected";
	$dir    = 'js/views/files/ope';
	$files1 = scandir($dir);
	//var_dump ($files1);
	echo json_encode($files1);
	$result = sqlsrv_query($conn,"SELECT * FROM dbo.users", array(),array("Scrollable" => 'static')); 
    if($result !== false){
        //$param = ($_GET['id']);
		//while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)) {
        //echo ($result); 
		//	echo ($row);
		$row_count = sqlsrv_num_rows( $result );
		console.log ("número de lihas: ".$row_count);
		echo "foram retornados ".$row_count." registros.";
		if($row_count!=0){
    	$error = true;
    	$emailError = "O email informado já está em uso.";
		}
        //}
    }
}else{
    die(print_r(sqlsrv_errors(), true));
}
//$json = json_encode($myData);
//echo $json;
?> 

<?php ob_end_flush(); ?>
