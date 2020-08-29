
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
<br>
<div align="center" style="background-color:green">
<H1>SIMPLE   FORM :</H1>

<form action="<?php echo htmlspecialchars('welcome.php')?>" method="POST">
Name:
<input type="text" name="name" id="name" value="<?= $_GET["n"] ?>" /> 
<span class="red"> <?= $_GET["nE"] ?></span>

<span class="green"> <?= $_GET["nV"] ?></span>


    

<br><br>
E-mail:
<input  type="email" name="email" value="<?= $_GET["e"] ?>" />
<span> <?php echo $_GET["eE"]; ?> </span>
<span class="green"> <?= $_GET["eV"] ?> </span>


<br><br>
Password:
<input type="password" name="password">
<span class="red"> <?= $_GET["pe"] ?></span>
<span class="green"> <?= $_GET["pv"] ?></span>

<br>

 <label><input type="checkbox" id="default-remember" /> Remember me</label><br>

Gender:
<input type="radio" id="male"  name="gender" value="male"> Male
<input type="radio" id="female"  name="gender" value="female">female
<span class="green"> <?= $_GET["GError"] ?></span>

<br>

<h>select year</h>
<select name="years">
<option value=""></option>
<option value="2019">2019</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2020">2020</option>
</select>
<span> <?php echo $_GET["YError"]; ?> </span>


<br><br>

<button type="sign up" >sign up</button> <br>
<p> you have account? <a href="login.php">log in</a>

</form>
</div>
</body>
</html> 
