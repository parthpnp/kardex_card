<?php
    
    if(isset($_POST['submit']))
    {
        include("connection.php");
        $value_1 = $_POST['date'];
        $value_2 = $_POST['doa'];
        $value_3 = $_POST['pro_diag'];
        $value_4 = $_POST['procedure'];
        $value_5 = $_POST['surgery'];
        $value_6 = $_POST['post_op_day'];
        $value_7 = $_POST['admt_doc'];
        $value_8 = $_POST['trans_in_date'];
        $value_9 = $_POST['final_diag'];
        $value_10 = $_POST['date_performed'];
        $value_11 = $_POST['date_performed_2'];
        $value_12 = $_POST['chief_complains'];
        $value_13 = $_POST['chief_invest'];
        $value_14 = $_POST['results'];
        $value_15 = $_POST['new_order'];
        $value_16 = $_POST['exst_disease'];
        $value_17 = $_POST['any_events'];
        $value_18 = $_POST['total_intake'];
        $value_19 = $_POST['weight'];
        $value_20 = $_POST['braden_score'];
        $value_21 = $_POST['total_output'];
        $value_22 = $_POST['morse_score'];
        $value_23 = $_POST['stool_passed'];
        $value_24 = $_POST['allergy'];
        $value_25 = $_POST['gsc_score'];
        $value_26 = $_POST['any_other'];

        //Check box chk[]
        $value_27 = "";
        if(isset($_POST['chk'])) {
            $checkbox1 = $_POST['chk'];
            foreach($checkbox1 as $chk1)  
            {  
              $value_27 .= $chk1.",";  
            } 
        }


        $value_28 = $_POST['instructions'];
        $value_29 = $_POST['time1'];
        $value_30 = $_POST['time2'];
        $value_31 = $_POST['time3'];
        $value_32 = $_POST['time4'];
        $value_33 = $_POST['time5'];
        $value_34 = $_POST['time6'];
        $value_35 = $_POST['time7'];

        $value_36 = $_POST['temp1'];
        $value_37 = $_POST['temp2'];
        $value_38 = $_POST['temp3'];
        $value_39 = $_POST['temp4'];
        $value_40 = $_POST['temp5'];
        $value_41 = $_POST['temp6'];
        $value_42 = $_POST['temp7'];
        $value_43 = $_POST['pulse1'];
        $value_44 = $_POST['pulse2'];
        $value_45 = $_POST['pulse3'];
        $value_46 = $_POST['pulse4'];
        $value_47 = $_POST['pulse5'];
        $value_48 = $_POST['pulse6'];
        $value_49 = $_POST['pulse7'];
        $value_50 = $_POST['resp1'];
        $value_51 = $_POST['resp2'];
        $value_52 = $_POST['resp3'];
        $value_53 = $_POST['resp4'];
        $value_54 = $_POST['resp5'];
        $value_55 = $_POST['resp6'];
        $value_56 = $_POST['resp7'];
        $value_57 = $_POST['spo2_1'];
        $value_58 = $_POST['spo2_2'];
        $value_59 = $_POST['spo2_3'];
        $value_60 = $_POST['spo2_4'];
        $value_61 = $_POST['spo2_5'];
        $value_62 = $_POST['spo2_6'];
        $value_63 = $_POST['spo2_7'];
        $value_64 = $_POST['diet'];

        $sql = "INSERT INTO `kardex_card`(`date`, `doa`, `pro_diag`, `procedure`, `surgery`, `post_op_day`, `admt_doc`, `trans_in_date`, `final_diag`, `date_performed`, `date_performed_2`, `chief_complains`, `chief_invest`, `results`, `new_order`, `exst_disease`, `any_events`, `total_intake`, `weight`, `braden_score`, `total_output`, `morse_score`, `stool_passed`, `allergy`, `gsc_score`, `any_other`, `chk`, `instructions`, `time1`, `time2`, `time3`, `time4`, `time5`, `time6`, `time7`, `temp1`, `temp2`, `temp3`, `temp4`, `temp5`, `temp6`, `temp7`, `pulse1`, `pulse2`, `pulse3`, `pulse4`, `pulse5`, `pulse6`, `pulse7`, `resp1`, `resp2`, `resp3`, `resp4`, `resp5`, `resp6`, `resp7`, `spo2_1`, `spo2_2`, `spo2_3`, `spo2_4`, `spo2_5`, `spo2_6`, `spo2_7`, `diet`  ) VALUES ('$value_1','$value_2','$value_3','$value_4','$value_5','$value_6','$value_7','$value_8','$value_9','$value_10','$value_11','$value_12','$value_13','$value_14','$value_15','$value_16','$value_17','$value_18','$value_19','$value_20','$value_21','$value_22','$value_23','$value_24','$value_25','$value_26','$value_27','$value_28','$value_29','$value_30','$value_31','$value_32','$value_33','$value_34','$value_35','$value_36','$value_37','$value_38','$value_39','$value_40','$value_41','$value_42','$value_43','$value_44','$value_45','$value_46','$value_47','$value_48','$value_49','$value_50','$value_51','$value_52','$value_53','$value_54','$value_55','$value_56','$value_57','$value_58','$value_59','$value_60','$value_61','$value_62','$value_63','$value_64')";

        $result = $conn->query($sql) or trigger_error($conn->error."[$sql]");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <div class="alert alert-success" role="alert">Well Done. Record Added Successfully! <a href="index.php">Create a New Record</a></div>
    </div>
</body>
</html>
<?php
    }
?>