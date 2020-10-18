<?php
if(isset($_POST['search']))
{
    $db=mysqli_connect("localhost","root","","test");
    $sql = "SELECT user FROM users";
 

 $search_val=$_POST['search_term'];
	
 $get_result = mysql_query("select * from pets where MATCH(Pname,user) AGAINST('$search_val')");
 while($row=mysql_fetch_array($get_result))
 {
  echo "<li><a href='http://talkerscode.com/webtricks/".$row['Pname']."'><span class='title'>".$row['Pdob']."</span><br><span class='desc'>".$row['user']."</span></a></li>";
 }
 exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="mainpadding">
    <h3 align="center"> Your Pets: </h3>
  <table class="table table-borderless">
        <tr style='background: whitesmoke;'>
          <th></th>
          <th>Pet Name </th>
          <th>Date of Birth</th>
          <th>Sex</th>
          <th>Weight</th>
          <th>Type</th>
          <th>husbandry</th>
          

          <!-- <th>&nbsp;</th> -->
      </tr>

      <?php 
      $query = "SELECT Pid, Pname, Pdob, Psex, Pweight,img, Ptype, husbandry, user, Pdisable FROM pets WHERE user = '$user' AND Pdisable = '0' ";
      $result = mysqli_query($db,$query);
      
      while($row = mysqli_fetch_array($result) ){
        //   $u = $row['user'];
          $id = $row['Pid'];
          $username = $row['Pname'];
          $name = $row['Pdob'];
          $gender = $row['Psex'];
          $email = $row['Pweight'];
          $img = $row['img'];
          $image_src = "imagesuploadedf/".$img;
          $Ptype = $row['Ptype'];
          $husbandry = $row['husbandry'];
      ?>
      <tr id='tr_<?= $id ?>'>
         <td><img class="img-thumbnail" alt="Responsive image" src='<?php echo $image_src;  ?>' ></td>
          <td><?= $username ?></td>
          <td><?= $name ?></td>
          <td><?= $gender ?></td>
          <td><?= $email ?></td>
          <td><?=  $Ptype ?></td>
          <td><?= $husbandry ?></td>
          

      </tr>
      <?php
      }
      ?>
    </table>
    </div>
</body>
</html>