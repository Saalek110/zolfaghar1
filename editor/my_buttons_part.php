<?php
//<button type="button" onclick="test('[Img][/Img]')">Img</button>
$link_img="[Img]".$link."[/Img]";


?>
 <script type='text/javascript'> 
 
function test(str){  
       var tc = document.getElementById("mytextarea");  
    var tclen = tc.value.length;  
    tc.focus();  
    if(typeof document.selection != "undefined")  
    {  
      document.selection.createRange().text = str;    
    }  
    else  
    {  
      tc.value = 
      tc.value.substr(0, tc.selectionStart) +
      str +
      tc.value.substring(tc.selectionStart, tclen);
    }  
}  

function test2(str){  
    str='imagenumber='+str+'size='+200+'☆☆☆☆T'
       var tc = document.getElementById("mytextarea");  
    var tclen = tc.value.length;  
    tc.focus();  
    if(typeof document.selection != "undefined")  
    {  
      document.selection.createRange().text = str;    
    }  
    else  
    {  
      tc.value = 
      tc.value.substr(0, tc.selectionStart) +
      str +
      tc.value.substring(tc.selectionStart, tclen);
    }  
}  


function test4(str){  
    str='pngnumber='+str+'sizep='+200+'☆☆☆☆T'
           var tc = document.getElementById("mytextarea");  
    var tclen = tc.value.length;  
        tc.focus();  
           if(typeof document.selection != "undefined")  
          {
      document.selection.createRange().text = str;    
          }  
    else  
    {
              tc.value = 
                    tc.value.substr(0, tc.selectionStart) +
              str +
             tc.value.substring(tc.selectionStart, tclen);

    }
}
</script> 
<!--//$link-->  
 
<center>
<table>
<tr>
<td>

<button type="button" style=" font-size:18px; height:26px; width:60px" onclick="test('[table1]')">table1</button>

</td>
<td>
 <button type="button" style=" font-size:18px; height:26px; width:60px" onclick="test('[table]')">table</button>

</td>
<td>
 <button type="button" style=" font-size:18px; height:26px; width:75px" onclick="test('[center]')">[center]</button>

</td>
<td>
<button type="button" style=" font-size:18px; height:26px; width:70px" onclick="test('[/table]')">[/table]</button>
</td>


</tr>
<tr>
<td>
<button type="button" style=" font-size:18px; height:26px; width:60px" onclick="test('[td]')">td</button>

</td>
<td>
<button type="button" style=" font-size:18px; height:26px; width:60px" onclick="test('tdo.test')">td.test</button>

</td>
<td>
<button type="button" style=" font-size:18px; height:26px; width:80px" onclick="test('[/center]')">[/center]</button>


</td>
<td>
<button type="button" style=" font-size:18px; height:26px; width:60px" onclick="test('[/td]')">[/td]</button>


</td>

</tr>
<tr>
<td>
<button type="button" style=" font-size:18px; height:26px; width:60px" onclick="test('[tr]')">tr</button>

</td>
<td>
<button type="button" style=" font-size:18px; height:26px; width:60px" onclick="test('[font200]')">--</button>


</td>
<td>

 <button type="button" style=" font-size:18px; height:26px; width:60px" onclick="test('[center][/center]')">--</button>

</td>
<td>
<button type="button" style=" font-size:18px; height:26px; width:60px" onclick="test('[/tr]')">[/tr]</button>


</td>


</tr>
<tr>
<td>
<button type="button" style=" font-size:18px; height:26px; width:60px" onclick="test('[div]')">[div]</button>
</td>
<td>
<button type="button" style=" font-size:18px; height:26px; width:60px" onclick="test('div.test')">div.test</button>
</td>
<td>
 
    <img src="images/editor_img.jpg" height="30" size="30" alt="Img" style=" font-size:12px; height:55px; width:120px" onclick="test('[Img][/Img]')">

</td>
<td>
 <button type="button" style=" font-size:18px; height:26px; width:60px" onclick="test('[/div]')">[/div]</button>

</td>

</tr>
<tr>

<td>
<button type="button" style=" font-size:18px; height:26px; width:60px" onclick="test('[bgcolor]')">--</button>

</td>

<td>
 <button type="button" style=" font-size:18px; height:26px; width:60px" onclick="test('[blue]')">--</button>
</td>

<td>
<button type="button" style=" font-size:18px; height:26px; width:60px" onclick="test('[color]')">--</button>
</td>

<td>
   <img src="images/editor_link.jpg" height="30" size="30" alt="link" style=" font-size:12px; height:55px; width:120px" onclick="test('[Url]http://ggg[Url_m]kkk[/Url]')">
</td>


</tr>
   
  <tr>
  <td>
  <button type="button" style=" font-size:10px; height:26px; width:90px" onclick="test('[table] [/table]')">table /table</button>
  </td>


      <td>
<button type="button" style=" font-size:18px; height:26px; width:60px" onclick="test('[tr]  [/tr]')">tr /tr</button>
          </td>
            <td>
<button type="button" style=" font-size:18px; height:26px; width:60px" onclick="test('[td]   [/td]')">td /td</button>
                </td>
                  <td>
<button type="button" style=" font-size:18px; height:26px; width:60px" onclick="test('[table1]')">table1</button>
                      </td>

     
     </tr>
