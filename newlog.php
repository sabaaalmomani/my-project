<html>
<body>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link  href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/font-awesome.min.css">

</head>

<form action="<?php echo htmlspecialchars('logtest.php')?>" method="POST"class="form-inline">


<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-5">
            <div class="card p-3 text-center">
                <h5 class="form-text-color">Connect with us</h5>
                <div class="d-flex justify-content-center mt-1">
                    <ul class="social-icons">
                        <li> <span class="dot"><i class="fa fa-facebook"></i></span> </li>
                        <li> <span class="dot"><i class="fa fa-twitter"></i></span> </li>
                        <li> <span class="dot"><i class="fa fa-linkedin"></i></span> </li>
                    </ul>
                </div>
                <h4 class="form-text-color">Login Form</h4>
                <div class="form"> 
                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                <span class="red"><?php if(isset($_GET["error"])) echo $_GET["error"]; ?></span>

                <input type="password"  name="password" class="form-control" placeholder="Password"> 
                </div>
                <div class="d-flex justify-content-between mt-3 mb-3">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> 
                     <a href="index.php"  class="btn btn-dark">Register Here</a>

                </div> <button type="submit"class="btn btn-dark" >log in</button> 

            </div>
        </div>
    </div>
</div>

</form>

<style>

body {
    background-color: #8E24AA
}

.card {
    border-top: 4px solid #F8BBD0;
    background-color: #BA68C8
}

.dot {
    height: 50px;
    width: 50px;
    background-color: #ad63b9;
    border-radius: 50%;
    display: inline-block
}

.social-icons {
    list-style: none;
    display: inline-flex;
    right: 16px;
    position: relative
}

.social-icons li {
    padding: 10px
}

.social-icons li i {
    line-height: 50px;
    position: relative;
    font-size: 20px;
    color: #fff
}

.form-text-color {
    color: #df9de8 !important
}

.form-control {
    background-color: transparent;
    margin-top: 10px;
    border: 1px solid #9952a5
}

.form-control:focus {
    box-shadow: none;
    background-color: transparent;
    border: 1px solid #71357b
}

.register {
    text-decoration: underline
}

.btn {
    background: linear-gradient(to right, #E55D87 0%, #5FC3E4 100%);
    border: none;
    height: 45px;
    transition: all 3s
}

.btn:hover {
    background: linear-gradient(to right, #5FC3E4 0%, #E55D87 100%)
}

.btn:focus {
    box-shadow: none
}


</style>
</body>
</html>