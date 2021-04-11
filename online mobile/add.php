<?php
 include "header.php" 
  ; ?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}


table, th, td {
  border: 1px solid black;

  background-color: #dddddd;
  padding: 8px;
  margin-left: 70px;
 text-align: right;
}


</style>
</head>
<body>
<?php

$mob_id = $mob_name = $mob_type = $mob_image = $mob_os = $mob_color =$mob_memory =$mob_storage = $mob_screen = $mob_price =$mob_desc = "";

$errorname = $errortype =$errorimage = $erroros =$errorcolor = $errormemory =$errorstorage =$errorscreen =         $errorprice = $errordesc = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $user = $_REQUEST['user'] ;
  $pass = $_REQUEST['pass'] ;
  $name = $_REQUEST['name'] ;
  $address = $_REQUEST['address'] ;
  $email = $_REQUEST['email'] ;
  $type = $_REQUEST['type'] ;



$conn = new mysqli("localhost", "root", "","mobile");
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
      }

?>
if (strlen($mob_name) == 0){
    $errornanme = "<font color='red'> Please enter Trade mark of mobile </font>";
  }if (strlen($mob_type) == 0){
    $errortype = "<font color='red'> Please enter type of mobile </font>";
  }if (strlen($mob_image) == 0){
    $errorimage = "<font color='red'> Please put image of mobile  </font>";
  }if (strlen($mob_os) == 0){
    $erroros = "<font color='red'> Please enter Operating system of mobile  </font>";
  }if (strlen($mob_color) == 0){
    $errorcolor = "<font color='red'> Please enter color of mobile  </font>";
  }if (strlen($mob_memory) == 0){
    $errormemory = "<font color='red'> Please enter Memory size of mobile  </font>";
  }if (strlen($mob_storage) == 0){
    $errorstorage = "<font color='red'> Please enter Storage of mobile  </font>";
  }if (strlen($mob_screen) == 0){
    $errorscreen = "<font color='red'> Please enter screen of mobile  </font>";
  }if (strlen($mob_price) == 0){
    $errorprice = "<font color='red'> Please enter price of mobile  </font>";
  }if (strlen($mob_desc) == 0){
    $errordesc = "<font color='red'> Please enter Description of mobile  </font>";
  }
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" id="register-form" novalidate="novalidate" style="margin-left: 40%;color: black;">
                
                <div class="form-group">Trade mark</div>
                <input type="text" id="mark" name="mark" value="<?php echo $name; ?>"> <?php echo $errorname ;?>
                <br>

                <div class="form-group">Operating System</div>
                <input type="text" id="os" name="os" value="<?php echo $user; ?>"> <?php echo $erroros ;?>
                <br>
                
                <div class="form-group">Storage Capacity</div>
                <input type="password" id="storage" name="storage"><?php echo $errorstorage ;?>
                <br>
                
                <div class="form-group">Type</div>
                <input type="type" id="type" name="storage"><?php echo $errortype ;?>
                <br>

                
                <div class="form-group">color</div>
                <input type="text" id="color" name="color" value="<?php echo $address; ?>"><?php echo $errorcolor ;?>
                <br>
                
                <div class="form-group">Screen Size</div>
                <input type="text" id="screen" name="screen" value="<?php echo $email; ?>"><?php echo $errorscreen ;?>
                <br>
                 <div class="form-group">RAM Memory Size</div>
                <input type="text" id="memory" name="memory" value="<?php echo $name; ?>"> <?php echo $errormemory ;?>
                <br>
                 <div class="form-group">Price</div>
                <input type="text" id="memory" name="memory" value="<?php echo $name; ?>"> <?php echo $errorprice ;?>
                <br>
                 <div class="form-group">Description</div>
                <input type="text" id="memory" name="memory" value="<?php echo $name; ?>"> <?php echo $errordesc ;?>
                <br>
                <div style="margin-left:140px;">
                    <input type="submit" name="submit" value="Save">
                </div>

            </form>


</body>
</html>





<?php

include "footer.php" ;
     ?>