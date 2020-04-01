<?php
require_once("config.php");
$name="santosh";
    class Model{
        public $conn;

        function __construct($connection){
            $this->conn=$connection;
        }

        function get_data_on_form($table_name,$id){
            $conn=$this->conn;
            $sql="select * from ".$table_name." where id=".$id;
            $result = mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($result);

                  if($row["gender"] =="Male"){
                    $row["male"]="checked";
                  }
                  elseif($row["gender"]=="Female"){
                    $row["female"]="checked";
                  }
                  elseif($row["gender"]=="Other"){
                    $row["other"]="checked";
                  }
                  else{
                    
                  }
            return $row;
        }
        //method for inserttion of data
        function insert($table_name , $data){           
            $conn=$this->conn;

            $colomn = array(
                "fn" =>"first_name",
                "ln" =>"last_name",
                "state" =>"state",
                "cn" =>"phone_no",
                "addrs" =>"address",               
                "radio" =>"gender",
                "symptom" =>"symptom",
                "date"=>"date"
              );
            $colomn_name = implode(",",$colomn);
            $mydate=getdate(date("U"));
            $date ="$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
            $my_str =ltrim(implode("','" ,$data),",'"); 

                    /**************** Insertion Query *******************/
            $insert ="insert into ".$table_name;
            $insert .="(".$colomn_name.")";
            $insert .= " values('".$my_str."','$date')";

        if(mysqli_query($conn,$insert)){
            echo"<hr>";
            echo "<h2 style='text-align:center'>Thank You For Registering</h2>";
            echo"<hr>";
            echo "<h5 style='text-align:center'>We Will Contact You Soon</h5>";
        }else{
            echo"Problem ".mysqli_error($conn);
        }     
        }



        function update($table_name , $data ,$id){
            $conn=$this->conn;
            $colomn = array(
                "id" =>"id",
                "fn" =>"first_name",
                "ln" =>"last_name",
                "cn" =>"phone_no",
                "addrs" =>"address",
                "state" =>"state",
                "radio" =>"gender",
                "symptom" =>"symptom",
              );

              foreach($data as $key => $value){
                $my_str.=$colomn[$key]."="."'".$data[$key]."',";
               
              }            
              $my_str = rtrim($my_str,",");
                        /****************** Update query ************************/
            $update ="update ".$table_name;
            $update.= " set ".$my_str." ";
            $update.="where ".$colomn["id"]."=".$id;

        if(mysqli_query($conn,$update)){
            echo "Data is updated successfully";
            header("Location:show_data.php");
        }else{
            echo"Problem ".mysqli_error($conn);
        } 
        }

        function delete($table_name , $id){
            $sql ="delete from ".$table_name." where id=".$id;
            $conn=$this->conn;
            if(mysqli_query($conn,$sql)){
                echo "Data is Deleted successfully";
                header("Location:show_data.php");
            }else{
                echo"Problem ".mysqli_error($conn);
            } 
        }

        function fetch($table_name){
            $conn=$this->conn;
            $sql="select * from ".$table_name;
            $result= mysqli_query($conn,$sql);

            $array=[];
            $i=0;
            while($row = mysqli_fetch_row($result)){
        
            $array[$i]=$row;
            $i++;
            }
            return $array;
            }
        
        
    }
    $obj = new Model($conn); 

?>