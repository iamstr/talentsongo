<?php include("includes/header.php");?>
<div class="container-fluid">
    <div class="row">
        
        <?php include("includes/navigation.php");?>
         <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            
          </div>

          

          <h2>Add Post</h2>
         
         <form action="connect/edit-post.php" method="post" enctype="multipart/form-data">
            
             <div class="form-group">
                
                
                <?php
                 
                 include("connect/connect.php");
                 
                 if(isset($_GET['post-id'])){
                        $post_id=$_GET['post-id'];
                     
                     $sql="select * from  posts where id='$post_id'";
    
    
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
                
                 
                 
                 
                 <input type="text" name="title" id="title" placeholder="Post Title" class="form-control" value="<?php echo  $title;?>">
                 </div>
            
            <div class="form-group">
                 <textarea name="" id="" cols="30" rows="10" class="form-control" > <?php echo  $content;?></textarea>
                 </div>
            
                 
                 
                 <div class="form-group">
                 <input type="file" name="file" id="file_id" class="form-control" >
                
                 
                 </div>
                 
                  <img src="uploads/<?php echo  $image;?>" alt="<?php echo  basename($image,"png");?>" style="width: 64px; height: 64px;" class="rounded mx-auto d-block mb-3" >
                 
                 
                 
                 <?php  }}}?>
                  <div class="form-group">
                 <input type="submit" name="edit" id="sub-mit" class="form-control">
                 </div>
                 
         </form>
        
         
        </main>
    </div>
</div>

<?php include("includes/footer.php");?>