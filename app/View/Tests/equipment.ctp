<!DOCTYPE html>
<html>
<head>
<style>
body
{
background-color:#d0e4fe;
} 
#para1
{
text-align:center;
}
#para2
{
font-size:40px;

}
#para3
{
margin-bottom:-115px;
}
</style>
</head>
<body>

<h1 id="para1">

<p id="para2"><select name="forma" onchange="location = this.options[this.selectedIndex].value;"></p>
 <option value="tests">Select Area</option>
 <option value="tests">Kormangla</option>
 <option value="mads">Madiwala</option>
 <option value="btms">btm</option>
  <option value="ejips">Ejipura</option>
   <option value="hsrs">HSR</option>
    <option value="kasturis">Kasturi</option>
</select></h1>
<input type="image" src="<?php echo $this->webroot; ?>img/2.jpg" align="bottom" width="90" height="400"> 

<br>


<p id="para3">
<li><a id="soc-twitter"         class="ir" href="https://twitter.com" target="_blank">Twitter</a></li>          
                         
                         
                         <li><a id="soc-linkedin"       class="ir" href="http://www.linkedin.com" target="_blank">Linkedin</a></li>        
                         
                         <li><a id="soc-facebook"       class="ir" href="https://www.facebook.com" target="_blank">Facebook</a></li>
                         <li><a id="soc-google-plus"       class="ir" href="https://plus.google.com/" target="_blank">Google-Plus</a></li></p>				 
                         
</body>
</html>