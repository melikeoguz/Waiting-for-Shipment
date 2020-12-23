        <div class="ui segment">
            <button class="ui green compact labeled icon button" style="margin-bottom:20px;" id="new-order-button">
              <i class="plus icon"></i>
              New Order
            </button>
            <button class="ui purple compact labeled icon button" style="margin-bottom:20px;" id="update-order-button">
              <i class="plus icon"></i>
              Update Orders
            </button>
           
            <form action="" method="POST">
            <button class="ui right floated teal big compact labeled icon button" style="margin-bottom:20px;" id="create-label">
            <i class="file pdf outline icon"></i>
              Create + Print Labels
            </button>

            </form>
            <!-- table goes here -->  

            <?php include_once "./deleted/sandbox/checkbox-form.php"?>
      
          </div>      

<?php

if(array_key_exists('delete-order', $_POST)) {

  $curl = curl_init();
  try{
  curl_setopt_array($curl, array(   
    CURLOPT_URL => "https://ssapi.shipstation.com/orders/5526691",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "DELETE",
    CURLOPT_HTTPHEADER => array(
      "Host: ssapi.shipstation.com",
      "Authorization: Basic YzVkZWViMWM4MmZiNGRiZmE0NmUwOTM1ODAyZTBmMTA6NzgyNmQzZWRjMGY3NDdjNjliY2JjMTc0YTJmMzJjNGE="
    ),
  ));

  $response = curl_exec($curl);
  
  curl_close($curl);
}
catch(Exception $e){
  echo 'Message: ' .$e->getMessage(); 
} 
  echo $response;

  echo '<script language="javascript">';    
  echo 'alert("'. $httpcode.'")';
  echo '</script>';   
}

if(array_key_exists('create-label', $_POST)) {
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://ssapi.shipstation.com/orders/createlabelfororder",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS =>"{\n  \"orderId\": 93348442,\n  \"carrierCode\": \"fedex\",\n  \"serviceCode\": \"fedex_2day\",\n  \"packageCode\": \"package\",\n  \"confirmation\": null,\n  \"shipDate\": \"2014-04-03\",\n  \"weight\": {\n    \"value\": 2,\n    \"units\": \"pounds\"\n  },\n  \"dimensions\": null,\n  \"insuranceOptions\": null,\n  \"internationalOptions\": null,\n  \"advancedOptions\": null,\n  \"testLabel\": false\n}",
    CURLOPT_HTTPHEADER => array(
      "Host: ssapi.shipstation.com",
      "Authorization: Basic YzVkZWViMWM4MmZiNGRiZmE0NmUwOTM1ODAyZTBmMTA6NzgyNmQzZWRjMGY3NDdjNjliY2JjMTc0YTJmMzJjNGE=",
      "Content-Type: application/json"
    ),
  ));
  
  $response = curl_exec($curl);  
  curl_close($curl);
  echo $response;
  echo '<script language="javascript">';
  echo 'alert("'. $httpcode.'")';
  echo '</script>';  
}
?>
<script>

 var table = $('#example').DataTable({     
 'columnDefs': [
    {
        'targets': 0,
        'checkboxes': {
        'selectRow': true
        }
     }
    ],
'select': {
    'style': 'multi'
 },
'order': [[1, 'asc']]
});
      
// Handle form submission event 
$('#frm-example').on('submit', function(e){
    var form = this;
    
    var rows_selected = table.column(0).checkboxes.selected();

    // Iterate over all selected checkboxes
    $.each(rows_selected, function(index, rowId){
        // Create a hidden element 
        $(form).append(
            $('<input>')
                .attr('type', 'hidden')
                .attr('name', 'id[]')
                .val(rowId)
        );
    });

    // FOR DEMONSTRATION ONLY
    // The code below is not needed in production
    
    // Output form data to a console     
    $('#example-console-rows').text(rows_selected.join(","));
    
    // Output form data to a console     
    $('#example-console-form').text($(form).serialize());
    
    // Remove added elements
    $('input[name="id\[\]"]', form).remove();
    
    // Prevent actual form submission
    e.preventDefault();
});   

</script>