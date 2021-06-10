<html>
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?php echo $title?></title>
      <!-- Link CSS -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/css/custom.css">
      
      <!--link bootstrap-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



          

      
      <!-- These classes onlywork if you attach Bootstrap. -->
      <!-- Add your code here to create a nav bar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <a href ="http://localhost:82/games-review/index.php/gamereview" class="navbar-brand mr-3">Games Reviews</a>
         <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="navbarCollapse">
         <span class="navbar-toggler-icon"></span>
         </button> 
         <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
               <a href="index.php" class="nav-item nav-link active">Home</a>
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
      <h2 align="center">Latest Reviews</h2>
      <div class="row justify-content-center">
      <?php
         foreach ($result as $row)
         {
             // These classes onlywork if you attach Bootstrap.
          //  echo '<div class="card cardBodyWidth '.$cssBodyClass.'">';
          echo '<div class="col-sm">';
             // This is presuming you have a column in your database table called ReviewImage.
             $thisImage = $row->ReviewImage;
             $thisInfo = $row->GameBlurb;
             $thisTitle=$row->GameName;
             $thisReview=$row->GameReview;
             $thisComments=$row->GameComments_YN;
             $thisSlug=$row->slug;
        //  echo '<div class="displayPic">';
        echo '<center>';
        
             $image = base_url()."application/images/". $thisImage;          
               // Look into the image properties library in CodeIgniter for more help on images: 

              echo '<h3>'.$thisTitle.'</h3>';
                echo '<img src="'.$image. '" height="350" width="275">';
                //echo '<p>'.$thisInfo. '</p>';

                echo '<p>'.$thisReview. '</p>';
            
               
           
              echo '<a href="' .base_url().'index.php/review/'.$thisSlug.'"> <button  type="button"  class="info-button btn btn-success"> Finde Out More Information</button></a>';
           
              echo "</div>";
              echo '</center>';
              // echo "</div>";
         
         }
       
         
         ?>


    </div>
        </div>
   
   <!-- This section needs editing to create the chat system using HTML -->
   <button id="chatButton" class="open-button btn btn-success" onclick="openForm()">Chat</button>
   <div class="chat-popup pull-right" id="myForm">
   <form id="chatroom" class="form-container">

   <label for="msg"><b>Message</b></label>

   <div id="chat"> 
    <input type="text" id="msg">

    <button type="submit" id="sendButton" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
      </form>
   </div>
   </div>


   <script>

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

</script>

   <!-- Load in the required scripts -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



   <!-- Don't forget to load in Vue abd socket.io -->
   <script src="<?php echo base_url('application/scripts/chat.js');?>"></script>
   <!-- Load in your custom scripts -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>
  
   <script src="https://cdn.jsdelivr.net/npm/vue"></script> 





</body>
</html>