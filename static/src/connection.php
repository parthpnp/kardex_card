<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password); 

mysqli_select_db($conn,"zydus");
$sql = "CREATE TABLE IF NOT EXISTS `kardex_card`(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, `date` TEXT, `doa` TEXT, `pro_diag` TEXT, `procedure` TEXT, `surgery` TEXT, `post_op_day` TEXT, `admt_doc` TEXT, `trans_in_date` TEXT, `final_diag` TEXT, `date_performed` TEXT, `date_performed_2` TEXT, `chief_complains` TEXT, `chief_invest` TEXT, `results` TEXT, `new_order` TEXT, `exst_disease` TEXT, `any_events` TEXT, `total_intake` TEXT, `weight` TEXT, `braden_score` TEXT, `total_output` TEXT, `morse_score` TEXT, `stool_passed` TEXT, `allergy` TEXT, `gsc_score` TEXT, `any_other` TEXT, `chk` TEXT, `instructions` TEXT, `time1` TEXT, `time2` TEXT, `time3` TEXT, `time4` TEXT, `time5` TEXT, `time6` TEXT, `time7` TEXT, `temp1` TEXT, `temp2` TEXT, `temp3` TEXT, `temp4` TEXT, `temp5` TEXT, `temp6` TEXT, `temp7` TEXT, `pulse1` TEXT, `pulse2` TEXT, `pulse3` TEXT, `pulse4` TEXT, `pulse5` TEXT, `pulse6` TEXT, `pulse7` TEXT, `resp1` TEXT, `resp2` TEXT, `resp3` TEXT, `resp4` TEXT, `resp5` TEXT, `resp6` TEXT, `resp7` TEXT, `spo2_1` TEXT, `spo2_2` TEXT, `spo2_3` TEXT, `spo2_4` TEXT, `spo2_5` TEXT, `spo2_6` TEXT, `spo2_7` TEXT, `diet` TEXT  )";
$result = $conn->query($sql) or trigger_error($conn->error."[$sql]");
if($conn==null)
{
   die("Connection failed: ");
}  
?> 