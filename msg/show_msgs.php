<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl">
<head>
<title>Nazarat</title>


<style>
body {
  background-image: url('../images/flowers1.jpg');
  background-color:rgba(220,220,200,1);
  
}


#news {
 background: gray;
     }
      

#tab  {
  border: 5px solid black;
    width:90%;
       background-color: #99ff88;
         margin-left: 20px;
            margin-right: 30px;
              text-align: right;
      padding-right: 40px
	 border-spacing: 50px;
     font-size: 25px;
      
     border-left: 1px solid #ffffff;
         border-right: 1px solid #ffffff;
       border-top: 1px solid #ffffff;
           padding: 2px 8px;
            border-radius: 10px;
        }
           #t1  {
             border: 3px solid black;
                 width:2%;
     background-color: #999988;
                 margin-left: 2px;
                 margin-right: 3px;
     text-align: right;
       padding-right: 4px;
border-spacing: 50px;
    font-size: 25px;
    border-left: 1px solid #ffffff;
 border-right: 1px solid #ffffff;
              border-top: 1px solid #ffffff;
    padding: 12px 8px;
    border-radius: 10px;
    font-family: 'helvetica neue', helvetica, arial, sans-serif;
      }
      #t2{
border: 5px solid black;
width:45%;
background-color: #bbaa88;
    margin-left: 2px;
 margin-right: 3px;
     text-align: right;
     padding-right: 4px
             border-spacing: 5px;
             font-size: 14px;
            border-left: 1px solid #ffffff;
border-right: 1px solid #ffffff;
border-top: 1px solid #ffffff;
    padding: 15px 8px;
          padding-right:20px;
     border-radius: 10px;
  font-family: 'helvetica neue', helvetica, arial, sans-serif; 
  }
          #t3  {
         border: 3px solid black;
             width:10%;
      background-color: #aa9988;
          margin-left: 2px;
          margin-right: 3px;
           text-align: right;
           padding-right: 4px
        border-spacing: 50px;
           font-size: 25px;
    border-left: 1px solid #ffffff;
        border-right: 1px solid #ffffff;
        border-top: 1px solid #ffffff;
      padding: 15px 8px;
      padding-right:20px;
             border-radius: 10px;
      font-family: 'helvetica neue', helvetica, arial, sans-serif;
 }
  #t4{
 background-color: #aa9988;
          border: 3px solid black;
              border-spacing: 50px;
                    border-radius: 10px;
                               
  }   
    #t5{
 background-color: #ffa500;

    }   
        #counter{
 background-color: #ffa500;
              width:7%;
  border: 3px solid black;
           padding: 3px;
           font-size: 25px;
     text-align: center;

        }                                                                 
</style>
 </head>
<body>
<p id="demo"></p>

<script>
const d = new Date();
document.getElementById("demo").innerHTML = d;
</script>

       <?php
            require "../base/ccoonn.php";
          include "../functions/functions.php"; 
            
    
  // session_start();

   $post_number=$_GET['number'];

   
    $str=writeMsg(7) ;

    
    //  echo "<a href='../../index.php'><img src='../../power/images/buttons/index.png'  style='width:200px;height:auto;'></a>"; 

     // echo "<a href='$link'><img src='../../power/images/buttons/return1.jpg'  style='width:400px;height:auto;'></a>"; 

      // echo "<li><a href='../../index.php'>index</a></li>";
        
            $str=writeMsg(8) ;
  
                

 echo"<div id='para_total'>";// dddddddddiiiivvv tttoootttaal
//---------------------------------------------------------------------------------------
//=========== print  =======================
         $temp=writeMsg(57);

$sql = "SELECT  *  FROM s110_nazarat WHERE post_number=$post_number";
 $result = mysqli_query($ccoonn ,$sql);

        
     
echo"<center>";              // ccccccccccccccccccccccccccc
  echo"msgs: ".$temp;
echo"<table border=1>";      // tttttttttttttttttttttttttt
while($info = mysqli_fetch_array( $result ))
        {
     echo"<tr>";
    $number=$info['number'];
   $approve=$info['approve'];

    $poster=$info['poster'];

      $time=$info['time'];
      $nazar=$info['nazar'];
         
     if ($approve=="free")   
     {
echo"<tr><td id='t1'>";   echo $number;  echo"</td>";
echo"<td id='t2'>";  echo $poster;   echo"</td>";
echo"<td id='t4'>";    //lllllllllllllllllllllllllllllllllll

echo $time;   

 echo"</td>";// llllllllllllllllllllllllllllllllll
echo"<td id='t4'>";  

 echo"</td><tr>";

echo"<tr><td colspan='4' id='t3'>";  
echo nl2br($nazar);  
 echo"</td></tr>";
echo"<tr><td colspan='4' id='t5'>"; 

 

  echo"</td></tr>";

             echo"</tr>";      
                                                                       }// if approve==free   
                                                                                                                                   } //while
echo"</table>";  // tttttttttttttttttttttttttt

  echo"</center>";   // cccccccccccccccccccccc

                 echo"<br>";
                 echo"<br>";

                        function test_input($data) {
                     $data = trim($data);
                    $data = stripslashes($data);
                     $data = htmlspecialchars($data);
                  return $data;
                                                                                     }               
                                                                                     
                                                                                     
    echo"</div>";   //dddddddd

                                                                                        ?>
 </body>
 </html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  