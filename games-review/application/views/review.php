<html>
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $title?></title>
<!-- Link CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/css/custom.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/css/comments.css">

<!--link bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



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
  <a href="http://localhost:82/games-review/index.php/login" class="nav-item nav-link active">Login</a>
  </div>

  <form class="form-inline my-3 my-lg-0">
      
  
  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <!--input class="form-control" type="text" placeholder="Search" aria-label="Search"-->
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> 
</form>

</div>

      <!-- You can use code from your previous assignment -->
  </nav>
</head>




<body style="background-color:grey;">

<div class="container">
<h2 align = "center">Latest Reviews</h2> 

    <div class="row">
        


        <?php
        foreach ($result as $row)
        {
            // These classes onlywork if you attach Bootstrap.
           // echo '<div class="card cardBodyWidth '.$cssBodyClass.'">';
           echo '<div class="col-sm">';

            // This is presuming you have a column in your database table called ReviewImage.
            $thisImage = $row->ReviewImage;
            $thisInfo = $row->GameBlurb;
            $thisTitle=$row->GameName;
            $thisSlug=$row->slug;

            $image = base_url()."application/images/". $thisImage;            // Look into the image properties library in CodeIgniter for more help on images: 
            
                echo '<h3>'.$thisTitle.'</h3>';
            
                echo '<img src="'.$image. ' " height="300" width="200">';
                echo '<p>'.$thisInfo. '</p>';
              //  echo '<a href="' .base_url()."index.php/gamereview/".$thisSlug.'"> <button type="button" class="info-button btn btn-success"> Info</button></a>';

               echo '</div>';
              echo "</div>";
        }
        ?>
    
    </div>
    </div>




<!-- Load in the required scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Don't forget to load in Vue abd socket.io -->






<div id="app" class="container">
	<div class="row">
		<h3>Comments</h3>
	</div>
    
    <div class="row">
    
    <div class="col-md-6">
    						<div class="widget-area no-padding blank">
								<div class="status-upload">
									<form>
                                        <h1>{{heading}}</h1>
										<textarea placeholder="Write Commments Here" ></textarea>
									
										<button v-on:click="postComments();" class="btn btn-success green"> Share</button>
                                    </form>
                              
								</div>
							</div>
						</div>
        
    </div>
</div>




</body>
<!-- Load in your custom scripts -->
<!-- Enables us to create and attach VueJS scripts. -->
<script src="https://cdn.jsdelivr.net/npm/vue"></script> 
<!-- Adds jQuery functionality -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!-- Attach the VueJS script here. -->
<script src="<?php echo base_url('application/scripts/CustomVue.js');?>"></script>

</html>