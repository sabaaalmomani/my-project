<?php
//var_dump(phpinfo());die;
//echo zend_version();
?>
<html>
<style>
.red
{
  color:red;
}

.green
{
  color:green;
}


</style>
<body>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link  href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">


</head>

<br>
<div align="center" style="background-color:green">
<p><h1>SIMPLE   FORM </h1></p>

<form action="<?php echo htmlspecialchars('welcome.php')?>" method="POST" >
<br><br>
Name:
<input type="text" name="name" id="name" value="<?php if(isset($_GET["n"] )) echo $_GET["n"]; ?>" > 
<span class="red"> <?php if(isset($_GET["nE"] )) echo  $_GET["nE"];?></span>

<span class="red"> <?php if(isset($_GET["nV"] )) echo  $_GET["nV"]; ?></span>


    

<br><br>
E-mail:
<input  type="email" name="email" value=" <?php if(isset($_GET["e"] )) echo $_GET["e"];  ?>" />
<span> <?php if(isset($_GET["eE"] )) echo  $_GET["eE"];?> </span>
<span class="red"> <? if(isset($_GET["eV"] )) echo  $_GET["eV"]; ?> </span>


<br><br>
Password:
<input type="password" name="password">
<span class="red"> <?php if(isset($_GET["pE"] )) echo  $_GET["pE"];?></span>
<span class="red"> <?php if(isset($_GET["pV"] )) echo  $_GET["pV"];?></span>

<br>

 <label><input type="checkbox" id="default-remember" /> Remember me</label><br>

Gender:
<input type="radio" id="male"  name="gender" value="male"> Male
<input type="radio" id="female"  name="gender" value="female">female
<span class="red"> <?if(isset ($_GET["GError"] )) echo $_GET["GError"]; ?></span>

<br>

<h>select year</h>
<select name="years">
<option value=""></option>
<option value="2019">2019</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2020">2020</option>
</select>
<span> <?php  if(isset($_GET["YError"])) echo $_GET["YError"]; ?> </span>


<br><br>

<button type="sign up" class="btn btn-primary" > sign up </button> <br>
<p><h1> you have account?</h1></p> <a href="newlog.php"  class="btn btn-dark">log in</a>

</form>
</div>
</body>
</html> 
