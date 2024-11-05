<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl">
<meta charset="UTF-8">
<head>
<title>edit post</title>
</head>
<body>
<?php
 
   require "../base/ccoonn.php";
  include"../css/edit_post.php";      
  include"../css/index.php";      



   include "../functions/functions.php"; 
$post_number=test_input($_POST["number"]);  
  //=========== daryafte post  =======================
    mysqli_set_charset($ccoonn, "utf8");

$sql = "SELECT * FROM s110_parts WHERE  number=$post_number";
$result = mysqli_query($ccoonn ,$sql );
echo"<center>";              // ccccccccccccccccccccccccccc
 // echo"topics: ".$temp;  // maghalat
echo"<center>";              // ccccccccccccccccccccccccccc
while($info = mysqli_fetch_array( $result ))
        {
             $post=$info['post'];
 
        }//while

    echo"<br>";
    echo"<br>";

    include"my_buttons_part.php";

?>


<center>
 <form id='myform' action="<?php echo $_SERVER['PHP_SELF']; ?>"  method = 'POST'>
   <tr><td colspan=4> 

 post: <textarea id="mytextarea"  form="myform" name="post" rows="10" cols="70">
 <?php  echo $post;  ?>
 </textarea><br><br>
</td></tr>
<?php
  echo'<input type="hidden" id="custId" name="number"  value='.$post_number.'>';
   ?>
   
   <tr><td colspan=4> <center>
  <input type="submit"  name='action1' value="Submit"  style=" font-size:40px; height:90px; width:150px">   </center>  </td></tr>


 </center> </td></tr>
</form>
</center>
</table>
</center>
<?php
 $str=writeMsg(40) ;
 echo'<h1><a href="../index.php">'.$str.'</a></h1>';
 echo"<br>";
 if(isset($_POST['action1']))   // add one text at end
 {// if action
echo"action";
        $post_number=test_input($_POST["number"]);   
               $post=test_input($_POST["post"]);
     mysqli_set_charset($ccoonn, "utf8");

     $sql = "UPDATE s110_parts SET post='$post' WHERE number=$post_number";


 $result = mysqli_query($ccoonn ,$sql);


 }// if action

    mysqli_set_charset($ccoonn, "utf8");
    
$sql = "SELECT * FROM s110_parts where number=$post_number";
$result = mysqli_query($ccoonn ,$sql);
echo"<center>";          
echo"<table border=1>";  
   while($info = mysqli_fetch_array( $result))
   {
   echo"<tr>";
echo"<td id='sotone_number'>";   echo $info['number'];   echo"</td>";
include"../parts_of_index/my_str_replace.php";

echo"<td id='sotone_post'>";   echo $info['post'];  echo"</td>";

   echo"</tr>";

    }
    echo"</table>";
    echo"</center>";        
 function test_input($data) {
                    $data = trim($data);
                     $data = stripslashes($data);
                          $data = htmlspecialchars($data);
                           return $data;
                           }
?>
</body>
</html>
