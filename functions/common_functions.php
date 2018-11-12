<?php
function connect_db() {
	$con = mysql_connect(HOST_NAME, DB_USER, DB_PASS);
	if($con) {
		//select database
		mysql_select_db(DB_NAME, $con);
		return $con;
	}
	else {
		exit('Error: ' . mysql_error());
	}
}


function validate_login($user_id, $pass) {
	if( ($user_id == "") || (strlen($pass) < 3) ) {
		return false;
	}
	else if ($pass == "" || strlen($pass) < 5 ) {
		return false;
	}
	else {
		return true;
	}
}

function login($user_id, $pass) {
	$con = connect_db();
	
	$sql = 'SELECT * FROM users WHERE user_id = "' . $user_id . '" AND pass = MD5("' . $pass . '") ';
	$result = mysql_query($sql, $con);

	if($result) {
		if( mysql_num_rows($result) == 1 ) {
			$_SESSION['is_logged_in'] = 1;
			$_SESSION['user_id'] = $user_id;
			return true;
		}
		else {
			return false;
		}
	}
	else {
		return false;
	}
}
/**
 * Convert time into decimal time and calculate wage.
 *
 * @param string $time The time to convert
 *
 * @return integer income.
 */
function time_to_decimal($time,$wage) {
    $timeArr = explode(':', $time);
    $decTime = ($timeArr[0]*60) + ($timeArr[1]) + ($timeArr[2]/60);
 	$hours = $decTime/60; 
	$income = $wage * $hours;
	
    return $income;
}
/**
* Calculate two time difference
*@return timedifference
*/
function timeDiff($firstTime,$lastTime,$breakTime)
{

// convert to unix timestamps
$firstTime=strtotime($firstTime);
$lastTime=strtotime($lastTime);

// perform subtraction to get the difference (in seconds) between times
$timeDiff=$lastTime-$firstTime;

//get difference in minute

$timeDiff = round($timeDiff/60,2)- $breakTime; // substract break time from totla minute
$timeDiff = round($timeDiff/60,2);

// return the difference
return $timeDiff;
}
?> 

