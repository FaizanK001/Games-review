<html>
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $title?></title>
<!-- Link CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/css/login.css">


<!--link bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<style>

</style>

    <!-- These classes onlywork if you attach Bootstrap. -->
    <!-- Add your code here to create a nav bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
 

  <a href ="#" class="navbar-brand mr-3">Games Reviews</a>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="navbarCollapse">
  <span class="navbar-toggler-icon"></span>
  </button> 


  <div class="collapse navbar-collapse" id="navbarCollapse">
  <div class="navbar-nav">
  <a href="http://localhost:82/games-review" class="nav-item nav-link active">Home</a>
  </div>

  <div class="navbar-nav ml-auto">
  
  

  <form class="form-inline my-3 my-lg-0">
      
  
  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <!--input class="form-control" type="text" placeholder="Search" aria-label="Search"-->
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> 
</form>

</div>
</div>

      <!-- You can use code from your previous assignment -->
  </nav>
</head>
<body style="background-color:grey;">
    <div id="login">
       
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="<?php echo base_url("index.php/Login");?>" method="post">
                            <h1 class="text-center text-info">Login Form</h1>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                               
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>



<!-- Load in the required scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>








<!-- Load in your custom scripts -->

</html>