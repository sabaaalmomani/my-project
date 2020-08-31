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
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script></head>
</head>
<br>
<div align="center" style="background-color:green">
<H1>SIMPLE   FORM :</H1>

<form action="<?php echo htmlspecialchars('welcome.php')?>" method="POST" >
<br><br>
Name:
<input type="text" name="name" id="name" value="<?php if(isset($_GET["n"] )) echo $_GET["n"]; ?>" > 
<span class="red"> <?php if(isset($_GET["nE"] )) echo  $_GET["nE"];?></span>

<span class="green"> <?php if(isset($_GET["nV"] )) echo  $_GET["nV"]; ?></span>


    

<br><br>
E-mail:
<input  type="email" name="email" value=" <?php if(isset($_GET["e"] )) echo $_GET["e"];  ?>" />
<span> <?php if(isset($_GET["eE"] )) echo  $_GET["eE"];?> </span>
<span class="green"> <? if(isset($_GET["eV"] )) echo  $_GET["eV"]; ?> </span>


<br><br>
Password:
<input type="password" name="password">
<span class="red"> <?if(isset($_GET["pe"] )) echo  $_GET["pe"];?></span>
<span class="green"> <?if(isset($_GET["pV"] )) echo  $_GET["Pv"];?></span>

<br>

 <label><input type="checkbox" id="default-remember" /> Remember me</label><br>

Gender:
<input type="radio" id="male"  name="gender" value="male"> Male
<input type="radio" id="female"  name="gender" value="female">female
<span class="green"> <?if(isset ($_GET["GError"] )) echo $_GET["GError"]; ?></span>

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

<button type="sign up" class="btn btn-primary" >sign up</button> <br>
<p> you have account? <a href="login.php">log in</a>

</form>
</div>
</body>
</html> 
