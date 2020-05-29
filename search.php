<?php
   //to add header to php file
        include 'headernew.html';

?>

<div class="searchpage">
  <div class="formsearch">
    <form action="" method="post">
      <div class="nametagsearch"><a> search students data</a></div>
      <div class="namelable">
        <label for="textforname">Name</label>

        <input type="text" id="textforname" name="search1" />
      </div>
      <div class="urn">
        <label for="urnsearch">U.r.n</label>
        <input type="text" id="urnsearch" />
      </div>

      <div class="departmentlable">
        <label for="department" class="depart1">department</label>
        <select name="depart" id="department">
          <option value="">select</option>
          <option value="IT">IT</option>
          <option value="CSE">CSE</option>
          <option value="ME">ME</option>
        </select>
      </div>
      <div class="buttonsearch">
        <button type="submit" name="submit" value="Search">Submit</button>
      </div>
    </form>
  </div>
  <div class="tablesearch">
    <table>
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

                                $res=$conn->query($sql); } else{ ?>
        <tr>
          <td>NO RECORDS FOUND</td>
          <td>NO RECORDS FOUND</td>
          <td>NO RECORDS FOUND</td>
        </tr>
        <?php
                            exit();
                        }



           if(mysqli_num_rows($res)>0){ while($row=$res->fetch_assoc()){
        $id=$row["id"]; $name=$row["name"]; $department=$row["department"]; ?>
        <tr>
          <td><?php echo $id; ?></td>
          <td><?php echo $name; ?></td>
          <td><?php echo $department; ?></td>
        </tr>

        <?php
                                                                              }


                                                                  }
                                           else{
                                                 ?>
        <tr>
          <td>NO RECORDS FOUND</td>
          <td>NO RECORDS FOUND</td>
          <td>NO RECORDS FOUND</td>
        </tr>
        <?php

                                               }
                                            }
 ?>
      </tbody>
    </table>
  </div>
</div>
<?php
include"footer.html";
?>
