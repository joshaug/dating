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
<div id="section">

<div class="row">
<form action="register.php" method="post">

    <fieldset>
	<div id="section">
        <div class="form-group">
			
            <input class="form-control" name="username" placeholder="Username" type="text"/>
			
        </div>
        <div class="form-group">
			
            <input class="form-control" name="password" placeholder="Password" type="password"/>
			
        </div>
        <div class="form-group">
			
            <input class="form-control" name="confirmation" placeholder="Re-enter Password" type="password"/>
			
        </div>
		<div class="form-group">
			
            <input class="form-control" name="email" placeholder="E-mail" type="text"/>
			
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Register</button>
        </div>
		</div>
		<div id="aside">
		        <div class="form-group">
			
            <input class="form-control" name="name" placeholder="Name" type="text"/>
			
        </div>
        <div class="form-group">
			
            <input class="form-control" name="sex" placeholder="Sex" type="text"/>
			
        </div>
		<div class="form-group">
			
            <input class="form-control" name="age" placeholder="Age" type="text"/>
			
        </div>
        <div class="form-group">
			
            <input class="form-control" name="location" placeholder="Location" type="text"/>
			
        </div>

		</div>
    </fieldset>
</form>
</div>
<div>
    or <a href="login.php">log in</a>
</div>

</div>
<div id="footer">
 Copyright © Group21
</div>

</div>
    <script src="Scripts/jquery-2.2.2.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
</body>
</html>     
