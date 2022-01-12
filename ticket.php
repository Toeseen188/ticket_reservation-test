<?php
function display() {
if($_POST["name"]) {
    if (preg_match("/[^A-Za-z '-]/",$_POST['name'] )) {
       die ("invalid name and name should be alphabet");
    }
    echo "Welcome!"."</br> "."NAME:". " ".$_POST['name']. "<br/>" ;
    $pass = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 14);
    echo "YOUR BOOKING ID IS:"." ".$pass;
  };


};

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    
    <title>ticket</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/modals/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="modals.css" rel="stylesheet">
  </head>
  <body>
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-6 shadow">
      <div class="modal-header border-bottom-0">
        <h4 class="modal-title">Booking</h4>
      </div>
      <div class="modal-body py-0">
        <p> <?php echo display()?> </p>
      </div>
      <div class="modal-footer flex-column border-top-0">
        <a type="button" href= "../test/index.php" class="btn btn-lg btn-primary w-100 mx-0 mb-2">Go Back</a>
      </div>
    </div>
  </div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
