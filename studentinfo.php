<?php
include'headernew.html';

?>
<link rel="stylesheet" href="studentinfo.css" />
<div class="allstudentdata">
  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>gender</th>
        <th>department</th>
        <th>email</th>
      </tr>
    </thead>
    <?php
include 'DBController.php';
$sql = "SELECT id ,name , gender ,department, email from search";
$result = $conn->query($sql); 
if ($result->num_rows > 0)
 { while($row =$result->fetch_assoc())
     { 
         $id=$row["id"]; $name=$row["name"];
         $gender=$row["gender"]; $department=$row["department"];
         $email=$row["email"]; 
         ?>
    <tbody>
      <tr>
        <td><?php echo $id;  ?></td>
        <td><?php echo $name;  ?></td>
        <td><?php echo $gender;  ?></td>
        <td><?php echo $department;  ?></td>
        <td><?php echo $email;  ?></td>
      </tr>
      <?php

}

} else {
    ?>
     <tr></tr>
      <tr>
        <td>no records found</td>
        <td>no records found</td>
        <td>no records found</td>
        <td>no records found</td>
        <td>no records found</td>
      </tr>
     
    </tbody>

    <?php


}
$conn->close(); ?>
   
  </table>
</div>

<?php
include"footer.html";
?>
