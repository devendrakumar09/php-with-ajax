<?php 
 include("config.php"); 
   
 if(isset($_GET['del_id'])) 
 { 
             $id=$_GET['del_id']; 
             
             $sql="delete from posts where id='".$id."'"; 
             $result=mysqli_query($conn,$sql);                                       
 } 
   
 ?> 