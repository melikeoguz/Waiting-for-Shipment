<!DOCTYPE html>
<!-- saved from url=(0044)https://semantic-ui.com/examples/fixed.html# -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Standard Meta -->
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Stallions' Shipping</title>
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/reset.css">
  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/site.css">

  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/container.css">
  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/grid.css">
  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/header.css">
  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/image.css">
  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/menu.css">

  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/divider.css">
  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/list.css">
  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/segment.css">
  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/dropdown.css">
  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/icon.css">

  <style type="text/css">
  body {
    background-color: #FFFFFF;
  }
  .ui.menu .item img.logo {
    margin-right: 1.5em;
  }
  .main.container {
    margin-top: 7em;
  }
.gosterme {
    display:none!important;
  }
  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }
  table#admin-tablo tbody tr td {text-align: center;}

  @media only screen and (min-width:1200px){.ui.container#admin-navbar {margin-left:0px!important;}}
  </style>

</head>
<body>

  <div class="ui fixed inverted menu">
    <div class="ui container" id="admin-navbar">
      <a href="https://semantic-ui.com/examples/fixed.html#" class="header item">
      <img src="./src/shipping-logo-long-white.png" class="ui logo centered small image">
      </a>
      <a href="https://semantic-ui.com/examples/fixed.html#" class="item">Dashboard</a>
      <div class="ui simple dropdown item">
        Customers <i class="dropdown icon"></i>
        <div class="menu">
          <a class="item" href="https://semantic-ui.com/examples/fixed.html#">All Customers</a>
          <a class="item" href="https://semantic-ui.com/examples/fixed.html#">Link Item</a>
          <div class="divider"></div>
          <div class="header">Header Item</div>
          <div class="item">
            <i class="dropdown icon"></i>
            Sub Menu
            <div class="menu">
              <a class="item" href="https://semantic-ui.com/examples/fixed.html#">Link Item</a>
              <a class="item" href="https://semantic-ui.com/examples/fixed.html#">Link Item</a>
            </div>
          </div>
          <a class="item" href="https://semantic-ui.com/examples/fixed.html#">Link Item</a>
        </div>
      </div>
    </div>
  </div>
  <div class="ui grid" style="margin: 1em 0em 1em 2em;">
          <div class="two wide computer two wide tablet six wide mobile column"><?php
              echo file_get_contents("./admin/left-sidebar-admin.php");
          ?>
          </div>
  
          <div class="fourteen wide computer fourteen wide tablet six wide mobile column">
            <div class="ui segment">

              <!-- Starting & Add Customer --> 
              <div class="ui clearing segment">
                <h2 class="ui left floated dividing header">Administration Panel</h2>
                <h6 class="ui right floated mini header">
                  <button class="ui green compact labeled icon tiny button" style="margin-top:10px;" id="new-user-button">
                    <i class="plus icon"></i>
                    Add New Customer
                  </button>
                  </h6>
              </div>           
              
              <!-- Info Monitor -->                
              <div class="ui grid">
                <!-- Today's Orders -->  
                <div class="four wide column">
                  <div class="ui card">
                    
                    <div class="content">
                      <div class="header" style="text-align: center;">Today's Order</div>
                    </div>
                    <div class="content">
                      
                        <h2 class="ui icon header">
                          <span class="left floated">
                            <i class="large blue dolly icon" style="margin-bottom: -15px"></i>
                          </span>
                          <span class="right floated">
                          <div class="content" style="padding-top: 25px">
                            1230
                          </div>
                          </span>
                        </h2>
                    </div>
                    <div class="blue extra content">
                      <span style="color:blue; id=todays-order-button"><a hrefs="" style="text-align: center;"><p><i class="right plus icon"></i>Click for more</p></a></span>
                    </div>
                  </div>
                </div>
                <!-- Total Customers -->                
                <div class="four wide column">
                  <div class="ui card">
                    
                    <div class="content">
                      <div class="header" style="text-align: center;">Total Customers</div>
                    </div>
                    <div class="content">
                      
                        <h2 class="ui icon header">
                          <span class="left floated">
                            <i class="large teal users icon" style="margin-bottom: -15px"></i>
                          </span>
                          <span class="right floated">
                          <div class="content" style="padding-top: 25px">
                            1230
                          </div>
                          </span>
                        </h2>
                    </div>
                    <div class="blue extra content">
                      <span style="color:blue;"><a href="" style="text-align: center;" id="customer-details-button"><p><i class="right plus icon"></i>Click for more</p></a></span>
                    </div>
                  </div>
                </div>
                <!-- Online Customers -->                
                <div class="four wide column">
                  <div class="ui card">
                    
                    <div class="content">
                     <div class="header" style="text-align: center;">Online Customers</div>
                    </div>
                    <div class="content">
                      
                        <h2 class="ui icon header">
                          <span class="left floated">
                            <i class="large olive chart line icon" style="margin-bottom: -15px"></i>
                          </span>
                          <span class="right floated">
                          <div class="content" style="padding-top: 25px">
                            68
                          </div>
                          </span>
                        </h2>
                    </div>
                    <div class="olive extra content">
                      <span style="color:blue;"><a href="history-page.php" style="text-align: center;"><p><i class="right plus icon"></i>Click for more</p></a></span>
                    </div>
                  </div>
                </div>
                <!-- Today's  Sales -->                
                <div class="four wide column">
                  <div class="ui card">
                    
                    <div class="content">
                      <div class="header" style="text-align: center;">Today's Sales</div>
                    </div>
                    <div class="content">
                      
                        <h2 class="ui icon header">
                          <span class="left floated">
                            <i class="large green dollar icon" style="margin-bottom: -15px"></i>
                          </span>
                          <span class="right floated">
                          <div class="content" style="padding-top: 25px">
                            100000
                          </div>
                          </span>
                        </h2>
                    </div>
                    <div class="blue extra content">
                      <span style="color:blue;"><a href="" style="text-align: center;"><p><i class="right plus icon"></i>Click for more</p></a></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="ui grid">
                <!-- Today's  Top 10 Users -->
                <div class="eight wide column">
                  <div class="ui segment"><?php include_once "./admin-files/admin-tablo.html" ?></div>
                
                </div>
                <!-- Order Chart -->
                <div class="eight wide column">
                  <div class="ui segment">
                    <canvas id="myChart"></canvas>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
    </div>
  
<!-- footergoes here --> 

<?php include_once "footer.php" ?>


      <div class="ui modal" id="add-new-user-modal">
        <div class="scrolling content" style="margin-bottom:50px;">
          <?php include_once "./admin-files/add-new-user.php" ?>
        </div>
      </div>
      <div class="ui modal" id="customer-details-modal">
        <div class="scrolling content" style="margin-bottom:50px;">
          <?php include_once "./admin/customer-table.html" ?>
        </div>
      </div>
<script>
  $("#new-user-button").click( function(){
              $("#add-new-user-modal").modal("show");
        });

  $(document).ready( function () {
            $('#admin-tablo').DataTable();
            console.log("calışır");
            
            $('.account-settings-modal.menu .item').tab({history:false});
                $('#password-reset-controller').click(function(){      
                    $("#password-reset-form").toggleClass('gosterme');
                });
            });
    
  $("#customer-details-button").click( function(){
              $("#customer-details-modal").modal("show");
        });

  $('#customer-details-dropdown').dropdown();


//CHART STARTS
  var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45]
        }]
    },

    // Configuration options go here
    options: {}
});
//CHART ENDS
   
</script>
</body></html>