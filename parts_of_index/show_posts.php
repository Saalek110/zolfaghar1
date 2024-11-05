<?php
$link_edit="editor/edit_post.php";
    mysqli_set_charset($ccoonn, "utf8");
    
 $sql = "SELECT * FROM s110_posts";
  $result = mysqli_query($ccoonn ,$sql);
   //echo"<center>";          
    echo"<table boder=2 id='table_posts' >";  
        while($info = mysqli_fetch_array( $result))
               {
        echo"<tr>";  

            $my_number=$info['number'];
 echo'<td id="sotone_shomareh_post">'; 
 //--------- form --------------
 if ( $_SESSION["username"]== "admin")
 {
 echo'<form id="myform" action='.$link_edit.'  method = "POST">';
echo'<input type="hidden" id="custId" name="number" 
        value="'.$my_number.'">';
 echo'<input type="submit"  name="a_edit" value="edit"  style=" font-size:14px; height:35px; width:60px">';     
     echo"</form>"; 
 }   // if admin
// ----- / form ----------------
 echo $info["number"];   
 echo"</td>";

 //echo'<td id="sotone_matne_post">'; 
 echo"<td>";
 //include"parts_of_index/my_str_replace_parts.php";

  include"parts_of_index/my_str_replace_posts.php";

//echo $info['news'];  
echo nl2br($info['post']);  


echo"</td>";
 echo"</tr>";
               }
                echo"</table>";
                 // echo"</center>";      


//echo'<table border=5>';
//echo'<tr>';
 //echo'<td id="sotone_payam_bezarid">'; 
$str=writeMsg(32);
   // echo '<a href="msg/a_write_msg.php?number='.$my_number.'">'.$str.'</a>'; 
//echo'</td>'; 
 //echo'<td id="sotone_chand_nazar">'; 
  $tedad=msg_cont($ccoonn , $my_number );
 if (   $tedad> 0)
 {
     $str=writeMsg(33);
 $ebarat= $tedad." ".$str;  
   // echo "<a href='msg/show_msgs.php?number=$my_number'>$ebarat</a>";
 }// if tedad
 //echo'</td>';
 // echo'<td id="sotone_dokmeye_edit">'; 
      $value=my_setting("show_edit"); 
//if ($value=='show-edit-button')
//{
    // }// if num
//echo'</td>'; echo'</tr>';echo'</table>';
                                                                ?>                                                        

