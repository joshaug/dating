<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Attract.ie</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/new.css" rel="stylesheet" />



<title>L</title>

<img class ="headpic" src="img/logo2.jpg" alt="picture"  />


<table>
<tr>
</tr>
</table>

<ul class="nav nav-pills">
    <ul class="nav nav-pills">
    <li><a href="index.php">Home</a></li>
    <li><a href="register.php">Register</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="logout.php"><strong>Log Out</strong></a></li>
	<li><a href="search.php"><strong>Search Page </strong></a></li>

</ul>
    <ul class="nav nav-tabs">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Messages</a></li>
    </ul>
</head>

<table>
<tr>
</tr>
</table>

<body>
<div class="container">
<div id ="aside">	
<table border="2">
<h1>Matches</h1>



<tr>
  
  <th>Name
  <th>Age
  <th>Location
  <th>Sex
  

</tr>





<?php
 

 
        foreach ($positions as $position) 
         { 
            
              
             print("<td>{$position["firstname"]}</td>"); 
             print("<td>{$position["age"]}</td>"); 
             print("<td>{$position["location"]}</td>");
             print("<td>{$position["sex"]}</td>"); 
             //print("<th>{$position["d"]}</th>"); 

             //print("<td>$ {$ave}</td>");
             //print("<td>{$position["position"]}</td>"); 
             //print("<td>$ {$value}</td>"); 
             
 
             print("</tr>"); 
             
         } 
         
         print("<tr>");  

   
?> 


      

</table>


</div>


</body>





<div id ="section">


					

<div id="article">
<h1>About Us</h1>
<p>
Attract! some romance in your life – and show you’ve got a big heart at the same time.

Make a small donation to charity, then take your pick of thousands of interesting, like-minded Irish singles. 

All our members are single people in Northern Ireland and the Republic of Ireland just like you, who are looking for a bit of craic and romance.

New profiles are always checked by a real person so you can use a site that is safe and secure, has no sexual profiles and does not allow married people.



</p>

<div id="footer">
 Copyright © Group21
</div>

</div>
    <script src="Scripts/jquery-2.2.2.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
</body>
</html>     





