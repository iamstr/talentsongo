<?php

include("includes/header.php");

?>








<h1 class="h1 font-weight-bold text-center tog">
    
    
    Login ✔
</h1>


<form action="admin/connect/login.php" method="post">
<div class="container my-5">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="form-group">
        <input type="text" id="name" class="form-control" name="username" required>
        <label class="form-control-placeholder" for="name">username</label>
      </div>
      <div class="form-group">
        <input type="password" id="password" class="form-control"  name="password" required>
        <label class="form-control-placeholder" for="password">Password</label>
      </div>
      <div class="form-group"><button class="form-control" type="submit" name="sbmt"> submit</button></div>
    </div>
  </div>
</div>
</form>

<?php

include("includes/footer.php");

?>



<style>
    
    .form-label-group > input, .form-label-group > label {
    padding: var(--input-padding-y) var(--input-padding-x);
}
    
    .form-label-group > label {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    margin-bottom: 0;
    line-height: 1.5;
    color: #495057;
    cursor: text;
    border: 1px solid transparent;
    border-radius: .25rem;
    transition: all .1s ease-in-out;
}
    
    
    
    .form-label-group input:not(:placeholder-shown) ~ label {
    padding-top: calc(var(--input-padding-y) / 3);
    padding-bottom: calc(var(--input-padding-y) / 3);
    font-size: 12px;
    color: #777;
}
    
    
    .form-label-group input:not(:placeholder-shown) {
    padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
    padding-bottom: calc(var(--input-padding-y) / 3);
}
    
    
    .tog{
        
        
        font-family: 'Open Sans Condensed', sans-serif;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        
    }
    .form-control:focus{
        
        box-shadow: 0 0 0 0.2rem rgba(128,0,0,.25);
        border-color: maroon !important;
        
    }
    

    
    
    .form-group {
  position: relative;
  margin-bottom: 1.5rem;
}

.form-control-placeholder {
  position: absolute;
  top: 0;
  padding: 7px 0 0 13px;
  transition: all 200ms;
  opacity: 0.5;
}

.form-control:focus + .form-control-placeholder,
.form-control:valid + .form-control-placeholder {
  font-size: 75%;
  transform: translate3d(0, -100%, 0);
  opacity: 1;
}

</style>






