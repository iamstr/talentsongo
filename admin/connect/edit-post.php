<?php

include("connect.php");

if(isset($_GET['post-id'])){

    $post_id=$_GET['post-id'];
if(isset($_POST['add-post'])){
    
    $target_dir = "./uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $title=$_POST['title'];
    $content=$_POST['content'];
    $file=$_FILES['file']["name"];
     $post_image_temp= $_FILES['file']['tmp_name'];
    move_uploaded_file($post_image_temp, $target_file);
    $date=date("y:m:d");
    
    
     $title= mysqli_real_escape_string($connection,$title);
    $content= mysqli_real_escape_string($connection, $content);
    $date= mysqli_real_escape_string($connection,$date);
    $file= mysqli_real_escape_string($connection,  $file);
    
    
    
    $title= trim($title);
    $content= trim($content);
    $date= trim($date);
    $file= trim( $file);
    
    
    
    $sql="update posts set title='$title',content='$content',image='$file',date=' $date' where id='$post_id'";
    
    
    $query=mysqli_query($connection,$sql);
    
    
    if($query){
        
        
        echo "query is succes";
        
         
    }else{
        
        
        
        die("query failed".mysql_error($connection));
    }
    
    
    
    
    
}
        }
else {header("../view-post.php?select");}









?>