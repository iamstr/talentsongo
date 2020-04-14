<?php include("includes/header.php");?>



<script>
//
//var str=document.getElementById("myTable").rows[1].cells.namedItem("truncate");
//    
//    var res = str.innerHTML.substr(0,40);
//    document.getElementById("myTable").rows[1].cells.namedItem("truncate").innerHTML=res;

</script>
<div class="container-fluid">
    <div class="row">
        
        
        <?php include("includes/navigation.php");?>
        
         <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">View Your Posts</h1>
            
          </div>
        
        
        <?php if(isset($_GET['view'])){
            
    ?>
    
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should select which post you want to edit in the table below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    
    <?php
    
    
        }?>
          <div class="table-responsive">
            <table class="table table-striped table-sm" id="myTable">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Post Title</th>
                  <th>Post Content</th>
                  <th>image</th>
                  <th>Status</th>
                  <th>Views</th>
                  <th>Date</th>
                  <th>Comment</th>
                  <th>edit</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  
                  include("connect/view-post.php");
                  
                  ?>
                
        
                
              </tbody>
            </table>
          </div>
        </main>
       
    </div>
</div>

<?php include("includes/footer.php");?>