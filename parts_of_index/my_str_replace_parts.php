<?php
if (isset ($info['post']) )
{


 $pattern = "/(\[td\]\.)([a-zA-Z0-9-_]{1,15})/i";
     $replacement = "<td id='$2'>";
      $info['post']=preg_replace($pattern, $replacement, $info['post']);
 $info['post']=str_replace("[table1]","<table border=1>",$info['post']);
      $info['post']=str_replace("[table]","<table>",$info['post']);
    $info['post']=str_replace("[div]","<div>",$info['post']);
      $info['post']=str_replace("[tr]","<tr>",$info['post']);
    $info['post']=str_replace("[td]","<td>",$info['post']);
     $info['post']=str_replace("[/table]","</table>",$info['post']);
 $info['post']=str_replace("[/div]","</div>",$info['post']);

 $info['post']=str_replace("[/tr]","</tr>",$info['post']);
  $info['post']=str_replace("[/td]","</td>",$info['post']);

  $info['post']=str_replace("[center]","<center>",$info['post']);

  $info['post']=str_replace("[/center]","</center>",$info['post']);

/*
//$pattern = "/(\d{4})-\d{2}-\d{2}/";
$pattern = "/^(tdo\.)(test3)$/";
$pattern = "tdo.test3";
//$replacement = "<tdo id='$2'>";
$replacement = "qqwwee";
//$info['post'] = preg_replace($pattern, $replacement, $info['post']);
$info['post'] = str_replace($pattern, $replacement,$info['post'] );
*/


//$result2= preg_replace('qq2', 'q33', $info['post']);
//$info['post']=$result2;
 $pattern = "/(tdo\.)([a-zA-Z0-9-_]{1,15})/i";
            // $replacement = '<a href="$1$1">$1$2</a>';
         $replacement = "<td id='$2'>";
     $info['post']=preg_replace($pattern, $replacement, $info['post']);





 $pattern = "/(div\.)([a-zA-Z0-9-_]{1,15})/i";
          $replacement = "<div id='$2'>";
$info['post']=preg_replace($pattern, $replacement, $info['post']);

      // $info['post']=str_replace("tdo.test1","<td id='test1'>",$info['post']);
           $info['post']=str_replace("table.test2","<table border=1 id='test2'>",$info['post']);


 $info['post'] = trim(preg_replace('/\s\s+/', ' ',  $info['post']));

/*
      $info['post']=str_replace("<br \>","ooooo",$info['post']);
            $info['post']=str_replace("<br />","uuu",$info['post']);
                                    $info['post']=str_replace("<br />","uuu22222",$info['post']);
                                       $info['post']=str_replace(" <br />","uuu22222",$info['post']);
                                          $info['post']=str_replace("<br /> ","uuu22222",$info['post']);
      $info['post']=str_replace("<br\>","mmmmmm",$info['post']);
            $info['post']=str_replace("<br/>","ghghh",$info['post']);

                                                        $info['post']=str_replace("\n","hhhhhhhhhhhhhhhhh",$info['post']);
 //  $info['post']=str_replace("/n","",$info['post']);
      $info['post']=str_replace("<br>","wwwwww",$info['post']);
*/



$info['post']=str_replace("gama","<img src='images/lion.jpg' alt='lion' width='50' height='50'/>" ,$info['post']);


}// if isset $info['post']

?>