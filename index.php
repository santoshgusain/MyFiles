<?php
  include_once("control.php");   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <style>
      label{
        font-weight: bold;
      }
    </style>
</head>
<body>

    <div class="container">
    <div style=" color:white;background-color:rgb(64,64,64);padding:10px;box-shadow:10px 16px 8px #888888">
        <h1 style="font-weight:bold;padding-left:10px;color:rgb(210,64,64)">COVID-19 </h1>
        <h2 style="padding-left:10px;">Registration Form India </h2>
        <h6 style="padding-left:10px;color:rgb(247,186,59)">If You have any symtoms of COVID-19 Register yourself here for check up.</h6>
    </div>

  <div class="container" id="div2" style="border-radius:8px;border:2px solid rgb(247,186,59);width:74%; height:500px;float:left; margin-top:20px">  
   <div class="con">
   

    <form style="margin-top:50px" action="control.php" method="POST">
    <input type="text" name="id" value="<?php echo $form_data["id"]; ?>" hidden >
  <div class="form-row ">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <input placeholder="Enter your First Name" type="text" class="form-control" id="fn" name="fn" value="<?php echo $form_data["first_name"]; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Last Name</label>
      <input placeholder="Enter your Last Name" type="text" class="form-control" id="ln" name="ln" value="<?php echo $form_data["last_name"]; ?>">
    </div>
  </div>
 

    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="state">State</label>
        <input placeholder="Enter your State" type="text" class="form-control" id="state" name="state" value="<?php echo $form_data["state"]; ?>">
        </div>

        <div class="form-group col-md-6">
        <label for="contact">Contact Number</label>
        <input placeholder="Enter your Phone Number" type="text" class="form-control" id="cn" name="cn" value="<?php echo $form_data["phone_no"] ;?>">
        </div>
    </div> 

  
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="addrs" name="addrs" value="<?php echo $form_data["address"]; ?>" placeholder="House No , Vill/Town/City , District,State,Pincode">
  </div>
  
  
  <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputPassword4">Gender</label>
        </div>

        <div class="form-group col-md-6">
        <input   type="radio" name="radio" id="blankRadio1" value="Male"  <?php echo $form_data["male"]; ?> aria-label="...">&nbsp Male 
        <input  type="radio" name="radio" id="blankRadio1" value="Female" <?php echo $form_data["female"]; ?> aria-label="...">&nbsp Female
        <input  type="radio" name="radio" id="blankRadio1" value="Other" <?php echo $form_data["other"]; ?> aria-label="...">&nbsp Other 
        </div>
    </div> 
  

  <div class="form-group">
      <label>Symptoms</label>
      <input placeholder="Enter Your Symptoms" type="text" class="form-control" name="symptom" id="symptom"  value="<?php echo $form_data["symptom"]; ?>">

  </div>

  

  <button style="padding: 10px 32px;background-color : rgb(0,141,201); color:black;font-weight:bold" type="submit" class="btn btn-success">Submit Form</button>
 
</form>
   </div> 
    </div>
    <div id="div1" style="border: 3px solid rgb(0,141,201); border-radius:10px; box-shadow:8px 12px 6px grey; margin-top:20px; margin-left:1%;width:25%;height:250px;background-color:rgb(254,241,241);float:left">
      <div style="font-weight: bold;font-size:24px;text-align:center;background-color:rgb(0,141,201)">Other Links</div>
      <div >
        <ul style="margin-top:15px">
        <li ><a href="https://www.who.int/"> Learn more about corona </a> </li>
        <li ><a href="https://www.covid19india.org/"> Track COVID-19 Cases Of India</a> </li>
        </ul>
      </div>
    </div>
    </div>
    <a style="position:absolute;right:139px;top: 90px; text-decoration: none; padding : 8px 16px; background-color:rgb(247,186,59);color:rgb(0,0,0);border-radius:8px" href="show_data.php">Registered Peoples</a>
    </body>
</html>



        