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

<div class="jumbotron text-center">
  <h1>Nursing Kardex Card</h1>
</div>
  
<div class="container">
  <form action="insert.php" method="post">
  <div class="row">
    <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="Date" name='date'>
      <input type="text" class="form-control" placeholder="D.O.A" name='doa'>
      <input type="text" class="form-control" placeholder="Provisional Diagnosis" name='pro_diag'>
      <input type="text" class="form-control" placeholder="Procedure" name='procedure'>
      <input type="text" class="form-control" placeholder="Surgery" name='surgery'>
      <input type="text" class="form-control" placeholder="Post OP Day for Surgery/Procedure" name='post_op_day'>
    </div>
    <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="Admitting Doctor" name='admt_doc'>
      <input type="text" class="form-control" placeholder="Transfer In Date" name='trans_in_date'>
      <input type="text" class="form-control" placeholder="Final Diagnosis" name='final_diag'>
      <input type="text" class="form-control" placeholder="Date Performed" name='date_performed'>
      <input type="text" class="form-control" placeholder="Date Performed" name="date_performed_2">
    </div>
  </div>
<hr/  >
  <div class="row">
    <table border="1" width="100%;">
      <tr>
        <td>
          <textarea class="form-control" name='chief_complains' placeholder="CHIEF COMPLAINS"></textarea>
        </td>
        <td rowspan="2">
          <textarea class="form-control" name='chief_invest' placeholder="CHIEF INVESTIGATIONS" style="height: 110px;"></textarea>
        </td>
        <td rowspan="2">
          <textarea class="form-control" name='results' placeholder="RESULTS" style="height: 110px;"></textarea>
        </td>
        <td rowspan="3">
          <textarea class="form-control" name='new_order' placeholder="NEW ORDER/OMISSION" style="height: 165px;"></textarea>
        </td>
      </tr>
      <tr>
        <td>
          <textarea class="form-control" name='exst_disease' placeholder="PRE-EXISTING DISEASE/SURGERY"></textarea>
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <textarea class="form-control" name='any_events' placeholder="ANY EVENTS"></textarea>
        </td>
      </tr>
    </table>
</div>
<hr/>
  <div class="row">
    <div class="col-sm-3">
      <input type="text" class="form-control" placeholder="Total Intake" name='total_intake'>
      <input type="text" class="form-control" placeholder="Weight" name='weight'>
      <input type="text" class="form-control" placeholder="Braden Score" name='braden_score'>
    </div>
    <div class="col-sm-3">
      <input type="text" class="form-control" placeholder="Total Output" name='total_output'>
      <input type="text" class="form-control" placeholder="Diet" name='diet'>
      <input type="text" class="form-control" placeholder="Morse's Score" name='morse_score'>
    </div>
    <div class="col-sm-3">
      <input type="text" class="form-control" placeholder="Stool Passed" name='stool_passed'>
      <input type="text" class="form-control" placeholder="Allergy" name='allergy'>
      <input type="text" class="form-control" placeholder="GSC Score" name='gsc_score'>
    </div>
    <div class="col-sm-3">
      <input type="text" class="form-control" placeholder="Any Other" name='any_other'>
    </div>
  </div>

  <hr/>
  <div class="row">
    <div class="col-sm-3">
      <div class="checkbox">
        <label><input name='chk[]' type="checkbox" value="chest limb pt">Chest Limp PT</label>
      </div>
      <div class="checkbox">
        <label><input name='chk[]' type="checkbox" value="steam inhalation">Steam Inhalation</label>
      </div>
      <div class="checkbox">
        <label><input name='chk[]' type="checkbox" value="Spirometry">Spirometry</label>
      </div>
      <div class="checkbox">
        <label><input name='chk[]' type="checkbox" value="deep breathing exercies">Deep Brathing Exercies</label>
      </div>
      <div class="checkbox">
        <label><input name='chk[]' type="checkbox" value="Nebulization">Nebulization</label>
      </div>
      <div class="checkbox">
        <label><input name='chk[]' type="checkbox" value="Suctioning">Suctioning</label>
      </div>
      <div class="checkbox">
        <label><input name='chk[]' type="checkbox" value="Tracheostomy">Tracheostomy Care</label>
      </div>
      <div class="checkbox">
        <label><input name='chk[]' type="checkbox" value="O2 Inhalation/Sp02 Monitoring">O2 Inhalation/Sp02 Monitoring</label>
      </div>
      <div class="checkbox">
        <label><input name='chk[]' type="checkbox" value="Vital Signs">Vital Signs</label>
      </div>
      <div class="checkbox">
        <label><input name='chk[]' type="checkbox" value="Mobilisation">Mobilisation</label>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="checkbox">
        <label><input name='chk[]' type="checkbox" value="Monitoring Peripheral pules">Monitoring Peripheral pules</label>
      </div>
      <div class="checkbox">
        <label><input name='chk[]' type="checkbox" value="RBS Monitoring">RBS Monitoring</label>
      </div>
      <div class="checkbox">
        <label><input name='chk[]' type="checkbox" value="Dressing (Wound/Bedsore)">Dressing (Wound/Bedsore)</label>
      </div>
      <div class="checkbox">
        <label><input name='chk[]' type="checkbox" value="Weight Checking">Weight Checking</label>
      </div>
      <div class="checkbox">
        <label><input name='chk[]' type="checkbox" value="Abdominal Girth">Abdominal Girth</label>
      </div>
      <div class="checkbox">
        <label><input name='chk[]' type="checkbox" value="Ryle's Tube Aspiration/Feed">Ryle's Tube Aspiration/Feed</label>
      </div>
      <div class="checkbox">
        <label><input name='chk[]' type="checkbox" value="Mouth & Back Care">Mouth &amp; Back Care</label>
      </div>
      <div class="checkbox">
        <label><input name='chk[]' type="checkbox" value="Change of Position">Change of Position</label>
      </div>
      <div class="checkbox">
        <label><input name='chk[]' type="checkbox" value="Air Bed/DVT">Air Bed/DVT</label>
      </div>
      <div class="checkbox">
        <label><input name='chk[]' type="checkbox" value="Drain">Drain</label>
      </div>
    </div>

    <div class="col-sm-6">
      <textarea class="form-control" name='instructions' placeholder="ANY SPECIAL INTRUCTIONS" style="height: 250px; width: 550px;"></textarea>
    </div>
  </div>

  <hr/>
  <h4>ABNORMAL VITALS</h4>
  <div class="row">
    <div class="col-sm-2">
      <h5  class="form-control">TIME</h5>
      <h5 class="form-control">Temperature</h5>
      <h5 class="form-control">Pulse</h5>
      <h5 class="form-control">Respiration</h5>
      <h5 class="form-control">BP</h5>
      <h5 class="form-control">RBS</h5>
      <h5 class="form-control">SP02</h5>
    </div>
    <div class="col-sm-2">
      <input type="text" class="form-control" name='time1'>
      <input type="text" class="form-control" name='time2'>
      <input type="text" class="form-control" name='time3'>
      <input type="text" class="form-control" name='time4'>
      <input type="text" class="form-control" name='time5'>
      <input type="text" class="form-control" name='time6'>
      <input type="text" class="form-control" name='time7'>
    </div>
    <div class="col-sm-2">
      <input type="text" class="form-control" name='temp1'>
      <input type="text" class="form-control" name='temp2'>
      <input type="text" class="form-control" name='temp3'>
      <input type="text" class="form-control" name='temp4'>
      <input type="text" class="form-control" name='temp5'>
      <input type="text" class="form-control" name='temp6'>
      <input type="text" class="form-control" name='temp7'>
    </div>
    <div class="col-sm-2">
      <input type="text" class="form-control" name='pulse1'>
      <input type="text" class="form-control" name='pulse2'>
      <input type="text" class="form-control" name='pulse3'>
      <input type="text" class="form-control" name='pulse4'>
      <input type="text" class="form-control" name='pulse5'>
      <input type="text" class="form-control" name='pulse6'>
      <input type="text" class="form-control" name='pulse7'>
    </div>
    <div class="col-sm-2">
      <input type="text" class="form-control" name='resp1'>
      <input type="text" class="form-control" name='resp2'>
      <input type="text" class="form-control" name='resp3'>
      <input type="text" class="form-control" name='resp4'>
      <input type="text" class="form-control" name='resp5'>
      <input type="text" class="form-control" name='resp6'>
      <input type="text" class="form-control" name='resp7'>
    </div>
    <div class="col-sm-2">
      <input type="text" class="form-control" name='spo2_1'>
      <input type="text" class="form-control" name='spo2_2'>
      <input type="text" class="form-control" name='spo2_3'>
      <input type="text" class="form-control" name='spo2_4'>
      <input type="text" class="form-control" name='spo2_5'>
      <input type="text" class="form-control" name='spo2_6'>
      <input type="text" class="form-control" name='spo2_7'>
    </div>
  </div>
  <center style="margin-bottom: 20px;">
     <input type="submit" class="btn btn-primary" name="submit" value="Submit"/>
     <input type="reset" class="btn btn-warning" name="reset" value="Reset"/>
    </form>
  </center>
</div>

</body>
</html>
