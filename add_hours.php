<?php 
session_start();

if(!isset($_SESSION['is_logged_in'])){
header('location:index.php?not_log_in='.$_SESSION['is_logged_in'].'&lg=failed');
}
include_once('config.php');
include_once('functions/common_functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Prospect 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130902

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href='http://fonts.googleapis.com/css?family=Englebert|Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/timediff.js" type="text/javascript"></script>
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<style type="text/css">
<!--
.style1 {color: #00CCFF}
.style2 {
	font-size: 18pt;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div id="header" class="container">
  <!-- Show Welcome message to user-->
  <div align="right" class="welmsg"> Welcome:
    <?=$_SESSION['fstname']?>
    <?=$_SESSION['lstname']?>
  </div>
  <div id="logo">
   <h1> Hours keeper </h1>
  </div>
  <!-- main manue-->
  <?php include('manue/main_manue.php');?>
</div>
<div id="wrapper" class="container">
  <div id="page">
    <!--main page  -->
    <div id="content"> <a href="#" class="image-style">
      <!-- image can be add here-->
      </a>
      <div id="addhours">
        <!-- Add Hours-->
        <h2>Add Your Hours </h2>
        <form action="addhours_action.php" method="post" name="addours" >
          <table width="600" border="0">
            <tr>
              <td width="98" height="34">Select Your Company </td>
              <td width="264">
			  <select name="com_id" id="com_id">
			  <option value="">Select Company</option>
			<?php
$sql='SELECT * FROM company WHERE company.user_id = "'.$_SESSION['uid'].'"'; 
				$con = connect_db();
				$result = mysql_query($sql, $con);
				if($result && (mysql_num_rows($result) > 0) ) {
					while($data = mysql_fetch_array($result)) {
					?>
<option value="<?=$data['com_id']?>" <?=($_REQUEST['com_id'] = $data['com_id']) ? "selected" : ""?> > <?=$data['com_name']?>
</option>
					
					<?php
					}
				}
			?>
        </select>     
              </td>
              <td width="224" colspan="3" rowspan="8" valign="top">
			  
			  <table width="237" cellspacing="2"  class="data">
                  <tr>
                    
                    <?php 
			  
$sql='SELECT  breaktime, timein, timeout, hourly_pay,com_name  FROM addhours,users,company WHERE addhours.user_id = "'.$_SESSION['uid'].'" AND addhours.com_id = company.com_id  ORDER BY addhrs_id DESC '; 
	      //exit ($sql);
	       $con=connect_db();
	      $result = mysql_query ($sql, $con);
	      if ($result && mysql_num_rows ($result)>0) {
		  echo "<h3>Your Last Entites</h3>";
	      $data = mysql_fetch_array ($result);
	     ?>
                  </tr>
                  <tr>
              <td colspan="2" align="center" style="border-bottom:solid"> 
			  <strong><?=$data['com_name']?></strong>
			   </td>
                  </tr>
                  <tr>
                    <td width="79">Time in </td>
                    <td> Date:
                      <?=date('m-d-Y', strtotime($data['timein']))?>
                      </br>
                      Time
                      <?=date('h:i A ', strtotime($data['timein']))?>
                    </td>
                  </tr>
                  <tr>
                    <td>Time Out </td>
                    <td> Date:
                      <?=date('m-d-Y', strtotime($data['timeout']))?>
                      </br>
                      Time
                      <?=date('h:i A ', strtotime($data['timeout']))?>
                    </td>
                  </tr>
                  <tr>
                    <td>Break Time </td>
                    <td><?=$data['breaktime']?>
                      Minutes</td>
                  </tr>
                  <tr>
                    <td>Total Hours </td>
                    <td><?php echo timeDiff($data['timein'],$data['timeout'],$data['breaktime']); 
						  echo " Hours";
						?> </td>
                  </tr>
                  <tr>
                    <td height="27">Total Income </td>
                    <td>
					
					<?php 
		  
		echo "$";  
	    //echo $data['hourly_pay'];   
 echo round(timeDiff($data['timein'],$data['timeout'],$data['breaktime']) * $data['hourly_pay'] ,2) ;
						 
?>
                    </td>
                  </tr>
                  <?php } 
					  else 
					  echo "You have not Enter any of your working hours ";
					   ?>
                </table></td>
            </tr>
            <tr>
              <td>Time in </td>
              <td><label> MM/DD/YYYY HH:MM AM/PM</label>
                <input type="datetime-local" name="timein" id="timein" /></td>
            </tr>
            <tr>
              <td>Time out </td>
              <td><label> MM/ DD/YYYY HH:MM AM/PM</label>
                <input type="datetime-local" name="timeout" id="timeout" /></td>
            </tr>
            <tr>
              <td>Total Hours </td>
              <td><input type="text"  name="totalhours"  id="totalhours"  onfocus="use_time_difference()"/>
              </td>
            </tr>
            <tr>
              <td colspan="2" align="center"><span class="style2">Add Break </span><br />
                <em> If you have taken</em></td>
            </tr>
            <tr>
              <td>Enter Minutes </td>
              <td><label></label>
                <input type="text" name="minute" id="minute" maxlength="3" size="5"  /></td>
              </td>
            </tr>
            <tr>
              <td> Total Hours</td>
              <td><input type="text" name="nethours" id="nethours" maxlength="3" size="5" onclick="net_time()" />
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="Submit" value="Submit" /></td>
            </tr>
          </table>
        </form>
      </div>
      <!-- End Add hours-->
    </div>
    <!--end content page  -->
    <div id="sidebar">
      <div id="sbox1"> </div>
      <div id="sbox2">
        <h4> Your Total Income as Today $9000 </h4>
        <p>This Week: $000.00</p>
        <p>Last Week: $000.00</p>
        <p> This Month: $000.00</p>
        <p> Click Here to See your all working History</p>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <p>Copyright (c) 2013 monirkhan.net</a></p>
</div>
</body>
</html>
