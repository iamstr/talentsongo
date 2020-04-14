<?php

include("connect.php");



    
   
     
    
    
    $sql="select * from  posts";
    
    
    $query=mysqli_query($connection,$sql);
    
    
    if($query){
        
        
        echo "query is succes";
        while($row=mysqli_fetch_assoc($query)){
        
    $title= $row['title'];
    $content=$row['content'];
    $date= $row['date'];
    $image=$row['image'];
    $status=$row['status'];
    $id= $row['id'];
    $comment=$row['comments'];
    $view=$row['views'];
    
        ?>
        <tr>
                  <td class="align-middle"><?php echo $id;?></td>
                  <td class="align-middle"><?php echo $title;?></td>
                  <td class=" text-truncate"  style="max-width: 150px;" id="truncate"> <?php echo $content;?></td>
                  <td><img src="uploads/<?php echo $image;?>" alt="<?php echo basename($image,"png");?>" style="width: 64px; height: 64px;"></td>
                  <td class="align-middle"><?php echo $status;?></td>
                  <td class="align-middle"><?php echo $view;?></td>
                  <td class="align-middle"><?php echo $date;?></td>
                  <td class="align-middle"><?php echo $comment;?></td>
                  <td class="align-middle"><a href="edit-post.php?post-id=<?php echo $row['id'];?>" class="btn btn-danger">
edit</a></td>
                </tr>
                
        <?php
        
        
        }
        
         
    }else{
        
        
        
        die("query failed".mysql_error($connection));
    }
    
    
    
    
    








?>
