<html>
<body>
<h1>log in </h1>
<br>
<style>
.red
{
  color:red;
}
</style>


<form action="<?php echo htmlspecialchars('logtest.php')?>" method="POST">
Name:
<input type="text" name="name" id="name"  /> 
<br>
<span class="red"><?= $_GET["error"] ?></span>


<br><br>
Password:
<input type="password" name="password">
<br>
<button type="submit" >log in</button> 

</form>


</html>