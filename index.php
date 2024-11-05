<?php
session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl">
<head>
<title>Zolfaghar</title>
</head>
<body>
       <?php

    require "base/ccoonn.php";
     include "functions/functions.php"; 
     require_once "tools/jdf.php";
  include"css/index.php";      

    mysqli_set_charset($ccoonn, "utf8");
    
                $hour= jdate('g:i A');   
                $the_week=jdate('l');
              $the_date=jdate('Y/m/d ');
        


 if (  isset(  $_SESSION["username"] )  )
 {
echo"<center>";
echo"Hi ".$_SESSION["username"];
echo"</center>";
 }//if sess
 echo'<table id="bala_tarin_table">';  // first table
echo'<tr>';
 echo'<td id="soton1_az_table_aval">'; 
 $str=writeMsg(21) ;
echo $str;
echo"<div id='blink'>";
echo" hi";
 echo"</div>";
  ?>
   <script type="text/javascript">
 var blink = document.getElementById('blink');
setInterval(function() {
  blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
                       }, 700);
</script>
      <?php
echo'</td>';
 echo'<td id="soton2_az_table_aval">'; 
echo"<center><h4>".$the_date.$the_week.$hour."</h4></center>";                 
echo'</td>';
 echo'<td id="soton3_az_table_aval">'; 
$count=counter("index");
 $str=writeMsg(12);
 echo $count;
   echo $str;
echo'</td>';

echo'</tr>';
echo'</table>';
 echo'<table id="table_e_satre_dovom">';  // dovomin table
echo'<tr>';
 echo'<td id="sotone_table_dovom">'; 

      writeMsg3("welcome");
      
echo'</td>';
echo'</tr>';
echo'</table>';//-----------------


//$f=post_read(3);
//echo $f;




   include "parts_of_index/show_parts.php"; 
echo"<br>";

/*
//  shoroe table e login
 echo'<table id="table_e_soton_1">'; 
echo'soton1';
 $str=writeMsg(11) ;  // new post
*/
echo"<center><h2>";
 $str=writeMsg(13) ;
  echo'<a href="login/login.php">'.$str.'</a>';

   $str=writeMsg(17) ;
     echo'<a href="login/logout.php">'.$str.'</a>';

 $str=writeMsg(14) ;
   echo'<a href="login/register.php">'.$str.'</a>';

echo"</h2></center>";
           echo"<br><br><br>";
 echo'<table id="avalin_table_e_footer">';//first footer table
echo'<tr>';
 echo'<td id="sotone_avale_table_avale_footer">'; 

    
echo'</td>';
 echo'<td id="sotone_dovome_table_avale_footer">'; 

echo"s110";
echo'</td>';

echo'</tr>';
echo'</table>';//-----------------
 
 echo'<table id="dovomin_table_e_footer">';//first footer table
echo'<tr>';
 echo'<td id="sotone_avale_table_dovome_footer">'; 

 if ( $_SESSION["username"]== "admin")
 {
echo'<img src="images/flower2.jpg" alt="robot" width="100" height="60"/>';

 ?>
 <form id='myform' action="<?php echo $_SERVER['PHP_SELF']; ?>"  method = 'POST'>
  <input type="checkbox" id="vehicle1" name="edits" value="Bike">
    <label for="vehicle1"> show edit</label><br>
          <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
            <label for="vehicle3"> ------</label><br><br>
              <input type="submit" name='action_1' value="Submit" style=" font-size:35px; height:55px; width:120px">
              </form>

 <?php
 }//if admin
 echo'</td>';
  echo'<td id="sotone_dovome_table_dovome_footer">'; 

   if ( $_SESSION["username"]== "admin")
 {
  echo'<a href="posts.php">posts page</a>';
  echo"<br><br>";
 ?>
 <form action="admin.php" method="post">
  <input type="submit" name='action_2' value="Admin" style=" font-size:35px; height:55px; width:140px">
              </form>
<br>
<br>


 <form action="editor/new_part.php" method="post">
   <input type="submit" name='action_3' value="New part" style=" font-size:35px; height:55px; width:170px">
                 </form>

 <?php
  $str=writeMsg(10) ;
  echo'<a href="admin/add_text.php">'.$str.'</a>';

 }//if admin
   echo'</td>';
    echo'<td id="sotone_sevome_table_dovome_footer">'; 

   echo'<img src="images/lion.jpg" alt="lion" width="180" height="140"/>';

 echo'</td>';
 echo'</tr>';




echo'</table>';//-----------------
include"parts_of_index/index_actions.php";


       function test_input($data) {
                                                             $data = trim($data);
 $data = stripslashes($data);
     $data = htmlspecialchars($data);
 return $data;
}                                     

?>

</body>
</html>