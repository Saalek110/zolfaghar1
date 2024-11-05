<?php
if (isset ($info['post']) )
{

/*
 $pattern = "/(\[td\]\.)([a-zA-Z0-9-_]{1,15})/i";
     $replacement = "<td id='$2'>";
      $info['post']=preg_replace($pattern, $replacement, $info['post']);
*/

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
 $pattern = "/(post)([0-9]{1,8})/i";
            // $replacement = '<a href="$1$1">$1$2</a>';
       
      //   $replacement = "<td id='$2'>";
          // $replacement = "$2";
    //   echo $replacement;
            //   $replacement =    post_read(4);
//$f=post_read(3);
//echo $f;
/*
function getOpenGraph($matches){
        return strrev($matches[1]);  
        }
*/


    // $info['post']=preg_replace_callback($pattern,'getOpenGraph', $info['post']);

    // $info['post']=preg_replace_callback($pattern,'wwwee', $info['post']);
//$pattern = '/[0-9]+/i';
 $pattern = "/([bbbb]+)/";
 $pattern = "/(post)([0-9]{1,8})/i";
 
$info['post'] = preg_replace_callback($pattern, 'aa', $info['post']);

//function abc() 
{
  //return $matches[0] . '(' . strlen($matches[0]) . ')';
}
//$input = "Welcome to W3Schools.com!";
//$pattern = '/[a-z0-9\.]+/i';
  //$result = preg_replace_callback($pattern, 'countLetters', $input);
//echo $result;

 $pattern = "/([0-9]+)/";
          //   $info['post']=preg_replace($pattern,"post_read($1)",$info['post']);

 //$info['post']=preg_replace($pattern,post_read(4),$info['post']);
      // $info['post']=str_replace("tdo.test1","<td id='test1'>",$info['post']);


 //$info['post'] = trim(preg_replace('/\s\s+/', ' ',  $info['post']));

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





}// if isset $info['post']

?>