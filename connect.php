<?php
$link=mysqli_connect("localhost","root","","mwiki_hosptial_patient_db");
if ($link==true){
    echo "Server Connected sucessfully !!";
}else{
    echo "error connecting With Server".mysqli_connect_error();
}
?>