<?php
//$API_ACCESS_KEY = "u+5n_XdrViGnYFELTyxQ";
if ($_FILES["uploaded"]["error"] >0)
 {
     echo "Error: " . $_FILES["uploaded"]["error"] . "<br>"
 } 
 else   
 {
     $lead_file=$_FILES["uploaded"]["name"];
     echo "Uploaded: " . $_FILES["uploaded"]["name"] . "<br>"; 
     move_uploaded_file($_FILES)["uploaded"]["tmp_name"],"/home/testfolder/" . $_FILES["uploaded"]["name"]);
 }
 
//$URL = "https://api.pagerduty.com/services";
?>