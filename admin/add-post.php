<?php include("includes/header.php");?>
<div class="container-fluid">
    <div class="row">
        
        <?php include("includes/navigation.php");?>
         <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            
          </div>

          

          <h2>Add Post</h2>
         
         <form action="connect/add-post.php" method="post" enctype="multipart/form-data">
            
             <div class="form-group">
                 <input type="text" name="title" id="title" placeholder="Post Title" class="form-control">
                 </div>
            
            <div class="form-group">
                 <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                 </div>
            
                 
                 
                 <div class="form-group">
                 <input type="file" name="file" id="file_id" class="form-control">
                 </div>
                 
                  <div class="form-group">
                 <input type="submit" name="add-post" id="sub-mit" class="form-control">
                 </div>
                 
         </form>
         
         
         
        </main>
    </div>
</div>

<?php include("includes/footer.php");?>