<?php
require_once("config.php");
require_once("Model.php");
error_reporting(0);


$id = $_POST["id"];
$data =$_POST;

        if($_GET["fun"]=="del"){
            $del_id=base64_decode($_GET["id"]);
            $obj->delete("corona",$del_id);

        }
        elseif($_GET["fun"]=="upd"){

          $form_data = $obj->get_data_on_form("corona",base64_decode($_GET["id"]));
          
        }
        elseif($_POST!=null)
        {
            if($id==""){
                $obj->insert("corona",$data);
            }
            else{
                $obj->update("corona",$data,$id);
            }
        }

?>