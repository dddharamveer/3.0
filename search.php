<?php
   //to add header to php file
        include 'headernew.html';

?>


<div class="container">
    <br>

<form action="" method="post" >
    <div class="form-group row" >

            <label for="nametx"   class="col-sm-2 col-form-label" >name:</label>
        <div class="col-sm-10" >
        <input type="text" name="search1" class="form-control" id="nametx"   >
</div>
   </div>
   <div class="form-group row" >
   <label for="inputde" class="col-sm-2 col-form-label">department:</label>
   <div class="col-sm-10">
   <select name="depart" class="form-control " id="inputde">
                       <option value="">select</option>
                       <option value="IT">IT</option>
                       <option value="CSE">CSE</option>
                       <option value="ME">ME</option>
                            </select>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label" ></label>
    <div class="col-sm-10">

    <input type="submit" name="submit" value="Search" class="btn btn-primary">
</div>
</div>
</form>

</div>
<table class=' table table-striped table-hover'>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>department</th>
                        </tr>
                              </thead>
        <tbody>
       <?php
       include 'DBController.php';
           if(isset($_POST["submit"])){
            $search_value=$_POST["search1"];
           $depart=$_POST["depart"];



                         if($search_value != "" || $depart != ""  )
                                {
                                     $sql="select * from  search where name like '%$search_value%'AND department like '%$depart%'  ";

                                $res=$conn->query($sql);

                                                    }





           if(mysqli_num_rows($res)>0){
                                              while($row=$res->fetch_assoc()){
                                                                      $id=$row["id"];
                                                                      $name=$row["name"];
                                                                      $department=$row["department"];
                                                                          ?>
                                                                          <tr>
                                                                             <td><?php echo $id; ?> </td>
                                                                             <td><?php echo $name; ?> </td>
                                                                             <td><?php echo $department; ?> </td>

                                                                                 </tr>




<?php
                                                                              }


                                                                  }
                                           else{
                                                 ?>
                                                 <tr>
                                                     <th>NO RECORDS FOUND</th>
                                           </tr>
                                                 <?php

                                               }
                                            }
 ?>
                        </tbody>
                                      </table>




<?php
include"footer.html";
?>
