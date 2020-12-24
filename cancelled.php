<!DOCTYPE html>
<html>
<head>
  <title>Waitin For Cash</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <meta charset="utf-8">



  <link rel="stylesheet" type="text/css" href="./deleted/sandbox/dataTables.checkboxes.css">
  <script src="./deleted/sandbox/dataTables.checkboxes.min.js"></script>
<!-- Footer styles starts-->
  <link rel="stylesheet" type="text/css" href="./footer_files/reset.css">
  <link rel="stylesheet" type="text/css" href="./footer_files/site.css">

  <link rel="stylesheet" type="text/css" href="./footer_files/container.css">
  <link rel="stylesheet" type="text/css" href="./footer_files/grid.css">
  <link rel="stylesheet" type="text/css" href="./footer_files/header.css">
  <link rel="stylesheet" type="text/css" href="./footer_files/image.css">
  <link rel="stylesheet" type="text/css" href="./footer_files/menu.css">

  <link rel="stylesheet" type="text/css" href="./footer_files/divider.css">
  <link rel="stylesheet" type="text/css" href="./footer_files/list.css">
  <link rel="stylesheet" type="text/css" href="./footer_files/segment.css">
  <link rel="stylesheet" type="text/css" href="./footer_files/dropdown.css">
  <link rel="stylesheet" type="text/css" href="./footer_files/icon.css">
  <style>
      .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }
  #account-settings-modal .ui.active.tab.segment {
    margin: 20px;
  }
  .gosterme {
    display:none!important;
  }
  </style>
<!-- footer styles end-->
</head>
<body>
<!-- menu goes here --> 
  <?php
              echo file_get_contents("navbar.html");
   ?>
    
  <?php
require_once "vendor/autoload.php";
  
use GuzzleHttp\Client;
 
$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://ssapi.shipstation.com',
]);

//get status code using $response->getStatusCode();

?>
<!-- sidebar menu goes here --> 

      <div class="ui grid">
          <div class="two wide computer nine wide tablet six wide mobile column">
              <div>
                  <?php
              echo file_get_contents("left-sidebar-menu.html");
              
          ?>
              </div>
          </div>
        <div class="eleven wide column" id="dashboard-monitor">
        
          <?php include_once "./deleted/sandbox/cancelled-form.php" ?>
        
        </div>
        <div class="three wide column">
        <?php include_once "order-monitor.php" ?>
     
        <?php include_once "balance-monitor.php" ?>
        </div>
      </div>

<!-- footergoes here --> 

      <?php include_once "footer.php" ?>

      <div class="ui modal" id="new-order-modal">
       <div class="scrolling content" style="margin-bottom:50px;">
        <?php include_once "./forms/new-order-form.php" ?>
        
      </div>
      </div>

      <div class="ui modal" id="update-order-modal">
       <div class="scrolling content" style="margin-bottom:50px;">
        <?php include_once "./forms/update-order-form.php" ?>
        
      </div>
      </div>

      <div class="ui modal" id="manuel-order-modal">
           <div class="ui grid">
              <div class="eight wide computer nine wide tablet six wide mobile column"></div>
              <div class="eight wide computer nine wide tablet six wide mobile column"></div>
           </div>
       </div>
      </div>

      <div class="ui modal" id="account-settings-modal">

      <?php include_once "./forms/account-settings-form.php" ?>          
      </div>
      <script>
</script>

      <script>  
   $(document).ready( function () {
//tab opener
    $('.account-settings-modal.menu .item').tab({history:false});
    $('#password-reset-controller').click(function(){      
    $("#password-reset-form").toggleClass('gosterme');
});
      });
      $("#history-page-button").click(function(){
  $("#dashboard-monitor").load("history-page.php");
});
$("#order-page-button").click(function(){
  $("#dashboard-monitor").load("order-page.php");
  });     


//modal openers        
        $("#new-order-button").click( function(){
            $("#new-order-modal").modal("show");
        });

        $("#update-order-button").click( function(){
            $("#update-order-modal").modal("show");
        });
        $("#manuel-order-opener").click( function(){
            $("#manuel-order-modal").modal("show");
        });
        $("#account-settings-button").click( function(){
            $("#account-settings-modal").modal("show");
        });
        $('.ui.dropdown').dropdown('hide');
        
        
      </script>
</body>
