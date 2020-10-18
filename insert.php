<?php
//insert.php
if(isset($_POST["subject"]))
{
 include("connect.php");
 $subject = mysqli_real_escape_string($connect, $_POST["subject"]);
 $comment = mysqli_real_escape_string($connect, $_POST["comment"]);
 $On = mysqli_real_escape_string($connect, $_POST["On"]);
 $Pname = mysqli_real_escape_string($connect, $_POST["Pname"]);
 $UserName = mysqli_real_escape_string($connect, $_POST["UserName"]);

 
 $query = "
 INSERT INTO comments(comment_subject, comment_text, VacDate,Pname,UserName)
 VALUES ('$subject', '$comment','$On','$Pname','$UserName')
 ";
 mysqli_query($connect, $query);
}
?>