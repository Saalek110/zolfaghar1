<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl">
<meta charset="UTF-8">
<head>
<title>new part</title>
<style>
body
{
background-color:rgba(140,240,130,1);
}
</style>
</head>
<body>
<?php
 
   require "../base/ccoonn.php";
   include"../css/new_post.php";      


  

    echo"<br>";
    echo"<br>";

    include"my_buttons_part.php";

?>


<center>
 <form id='myform' action="<?php echo $_SERVER['PHP_SELF']; ?>"  method = 'POST'>
   <tr><td colspan=4> 

 post: <textarea id="mytextarea"  form="myform" name="post" rows="10" cols="70"></textarea><br><br>
</td></tr>
   <tr><td colspan=4> <center>
  <input type="submit"  name='action1' value="Submit"  style=" font-size:40px; height:90px; width:150px">   </center>  </td></tr>


 </center> </td></tr>
</form>
</center>
</table>
</center>
<?php

 if(isset($_POST['action1']))   // add one text at end
 {// if action
echo"action";

   
    $post=test_input($_POST["post"]);
     mysqli_set_charset($ccoonn, "utf8");

 
    $sql="INSERT INTO `s110_parts` (`post`) VALUES ('$post')";
 $result = mysqli_query($ccoonn ,$sql);


 }// if action

    
 function test_input($data) {
                    $data = trim($data);
                     $data = stripslashes($data);
                          $data = htmlspecialchars($data);
                           return $data;
                           }
?>
</body>
</html>
