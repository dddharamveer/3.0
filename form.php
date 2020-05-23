<?php
include'headernew.html';

?>


<div class="container">
    <h3 style="text-align:center;">SUBMISSION FORM</h3>


<form  action="connect.php" method="post">

<div class="form-group row">
  
  <label for="nametb" class="col-sm-2 col-form-label">First name :</label> 
      <div class="col-sm-4" >
      <input class="form-control" id="nametb" type="text" name="name"/>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Gender </label>
 
<div class="col-sm-4" >
<input type="radio" name="gender"  value="male"/> Male
<input type="radio" name="gender"  value="female"/> Female
</div>
</div>
<div class="form-group row">

<label class="col-sm-2 col-form-label">Email:</label>
<div class="col-sm-4">
<input class="form-control" type="email" name="email" placeholder="email"/>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label"> department:</label>
<div class="col-sm-2">
<select name="department" class="form-control">
<option class=" disabled" >select</option>
    <option value="IT">IT</option>
    <option value="CSE">CSE</option>
    <option value="ME">ME</option>
</select>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label" ></label>
    <div class="col-sm-4">

    <input type="submit" name="submit" value="Search" class="btn btn-primary">
</div>
</div>


</form>
</div>
<?php
include"footer.html";
?>










