<html>
<body>

<h1 style="text-align:center"><div class="p-3 mb-2 bg-secondary text-white">log in</div></h1>
<br>
<style>
.red
{
  color:red;
}
</style>

<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script></head>
</head>

<div align="center">


<form action="<?php echo htmlspecialchars('logtest.php')?>" method="POST"class="form-inline">

Name:
<input type="text" name="name" id="name"  /> 
<br>
<span class="red"><?if(isset($_GET["error"])) echo $_GET["error"]; ?></span>


Password:
<input type="password" name="password">
<br>
<button type="submit"class="btn btn-dark" >log in</button> 

</form>
</div>

</body>

</html>