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

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link  href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/font-awesome.min.css">


</head>

<div align="center">


<form action="<?php echo htmlspecialchars('logtest.php')?>" method="POST"class="form-inline">

Name:
<input type="text" name="name" id="name"  > 
<br>
<span class="red"><?php if(isset($_GET["error"])) echo $_GET["error"];  ?></span>


Password:
<input type="password" name="password">
<br>
<button type="submit"class="btn btn-dark" >log in</button> 

</form>
</div>

</body>

</html>