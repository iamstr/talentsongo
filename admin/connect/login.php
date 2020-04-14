<?php

include("connect.php");









if(isset($_POST['sbmt'])){
    
    
    


  $username=$_POST['username'];

    $password=$_POST['password'];
    
    
   $username= mysqli_real_escape_string($connection,$username);
    $password= mysqli_real_escape_string($connection,$password);
    
    
    
    $sql="select * from user where username='$username'";
    
    
    $query=mysqli_query($connection,$sql);
    
    
    
    if(!$query){
        
        die("query failed ".mysqli_error($connection));
        
        
    }


else{
    
    
    
     while($row=mysqli_fetch_assoc($query)){
            
            
           
            
            $id=$row['id'];
             $pass= $row['password'];
            
            
            
            $user_name=$row['username'];
       
        }
    
    $_SESSION['user']=$user_name;
    
    if($user_name==$username&& $pass==$password){
        
      header("location: ../index.php");
        
        
    }
    
}




}




?>