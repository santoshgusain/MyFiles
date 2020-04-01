<?php
require_once("Model.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: 1px solid grey;
        }
        tr:nth-child(even) {background: #ffb3b3}
    </style>

</head>
<body>

<span id="home" style="position:absolute; right:15px;background-color:rgb(247,186,59);cursor:pointer;padding:8px 16px; border-radius:5px;">Go Back</span>
<div><h2 style="text-align: center">Users Data</h2></div>  
<table style=" margin:auto; margin-top: 30px;   padding: 10px;box-shadow: 5px 10px 5px #888888; border:1px solid lightgrey">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Mobile No</th>
        <th>Address</th>
        <th>State</th>
        <th>Gender</th>
        <th>Symptom</th>
        <th>Date</th>
        <th>Update</th>
        <th>Delete</th>      
    </tr>
    <?php
    $result = $obj->fetch("corona");  
    foreach($result as $value){
        echo"<tr>";
        for($i=0; $i<count($value);$i++){
            echo "<td>".$value[$i]."</td>"; 
        }
        echo "<td><a href='index.php?fun=upd&&id=".base64_encode($value[0])."'>Edit</a></td>";
        echo "<td><a href='control.php?fun=del&&id=".base64_encode($value[0])."'>Delete</a></td></tr>";
    }
   
    ?>
</table>

</body>
</html>
<script>
        let back = document.getElementById("home");
        console.log(back);
        back.addEventListener("click",function(){
            console.log("clicked");
            location.href="http://localhost/santosh/corona%20form/index.php";
        });
        </script>


