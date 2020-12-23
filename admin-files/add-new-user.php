<form id="newCustomer" class="ui form" method= "POST">

<div class="ui segment">
    
        <p>Account Settings Form</p></div>
           
          <div class="ui segment" style="margin:10px;">
          <div class="ui form">
              <h4 class="ui dividing header">Personal Information</h4>
                <div class="field">
                  <label>Name</label>
                  <div class="two fields">
                    <div class="field">
                      <input type="text" name="customer-first-name" placeholder="First Name">
                    </div>
                    <div class="field">
                      <input type="text" name="customer-last-name" placeholder="Last Name">
                    </div>
                  </div>
                </div>
                <div class="field">
                  <div class="two fields">
                    <div class="field">
                    <label>Email</label>  <input type="text" name="customer-email" placeholder="Email">
                    </div>
                    <div class="field">
                    <label>Phone</label>  <input type="text" name="customer-phone" placeholder="Phone">
                    </div>
                  </div>
                </div>
            </div>
            <div class="ui toggle checkbox" style="margin-bottom:10px;">
                <input type="checkbox" name="public" id="password-reset-controller"> 
                <label>Reset Password</label>
            </div>

            <div class="ui form gosterme" id="password-reset-form">
              <h4 class="ui dividing header">Password</h4>
              <div class="field">
                  <label>Old Password</label>
                    <div class="field">
                      <input type="text" name="shipping[old-password]" placeholder="Old Password">
                    </div>
                    <label>New Password</label>
                    <div class="field">
                      <input type="text" name="shipping[new-password]" placeholder="New Password">
                    </div>
                    <label>New Password Again</label>
                    <div class="field">
                      <input type="text" name="shipping[new-password-again]" placeholder="New Password Again">
                    </div>
                    <div class="ui teal submit button">Reset Password</div>
                </div>
            </div>
        
      
          <div class="ui form">
              <h4 class="ui dividing header" style="margin:10px;">Partnership Information</h4>
                <div class="field">
                  <label>Company Name</label>
                
                    <div class="field">
                      <input type="text" name="customer-company-name" placeholder="Company Name">
                    </div>
                    
                </div>
                <div class="field">
                  <label>Website</label>
                
                    <div class="field">
                      <input type="text" name="customer-website" placeholder="Website">
                    </div>
                    
                </div>
                <div class="field">
                  <label>Gov ID / Tax No</label>
                
                    <div class="field">
                      <input type="text" name="customer-tax-no" placeholder="Gov ID / Tax No">
                    </div>
                    
                </div>
            </div>
          <div class="ui right labeled left icon input" style="margin-top:10px;">
                  <i class="dollar icon"></i>
                  <input type="customer-balance" value="132">
                  <a class="ui tag label">
Balance                  </a>
                </div>
                </div>

        
</div>

<input class="ui inverted green button" type="submit" name="son" id="son" value="Soon" /><br/>

<?php     

if(array_key_exists('son', $_POST)) { 
          
    $db_firstName = $_POST['customer-first-name'];
    $db_lastName  = $_POST['customer-last-name'];
    $$db_email    = $_POST['customer-email]'];
    $db_phone     =$_POST['customer-phone']; 
    $db_companyName= $_POST['customer-company-name'];
    $db_website=$_POST['customer-website'];
    $db_govId=   $_POST['customer-tax-no']; 
    $db_balance=$_POST['customer-balance'];

    
    $conn = mysqli_connect("localhost", "root", '', "shipping_automation");
 
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $id=15;
    $insertSql ="INSERT INTO `customer_info`  VALUES ('14','$db_firstName','$db_lastName','$db_email','$db_phone','$db_companyName','$db_website','$db_balance','$db_govId')"; 
   
    if (mysqli_query($conn, $insertSql)) {
      echo "Record added successfully";
    } else {
      echo "Error record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);









}             
?> 

</form>