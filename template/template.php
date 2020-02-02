<!doctype html>
<html lang="en">
  
  <head>
  

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">







    
     

     <title><?php site_name(); ?></title>
        </head>

        <body>
        <div class="d-flex justify-content-center">
        <div class="container">

        <div class="jumbotron jumbotron fluid d-flex justify-content-center">
        <h1 class="display-4">Team Oasis</h1> 
        <h2 class="display-4">J Balvin + Bad Bunny</h2> 
        <h3 class="lead">legendary beats</h3>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
         <a class="navbar-brand navbar-collapse" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
     </button>
         <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
         <?php  nav_menu(); ?>
        </ul>
        </div>

    </nav>
    <div class="containter">
    <?php page_content();?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script>
     $("#button").click(function() {
            $.ajax({
                type: 'post',
                url: '../includes/functions.php',
                data: {
                    "random": true
                },
                dataType: "HTML",
                success: function(result) {
                    $("#rand").html(result);
                },
                error: function() {
                    alert("Failed to get comic!");
                }
            });
            return false;
        });
    </script>
    </div>
    </div class="d-flex justify-content-center">
    </body>
    
</html>