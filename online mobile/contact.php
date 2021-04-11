<!doctype html>
<html > 
    <body>
       
       <!-- header -->

       <?php
       include "header.php";

 $name = $email = $address =  $message= "";
$errorname = $erroremail = $erroraddress = $errormessage ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
  $name = $_REQUEST['name'] ;
  $address = $_REQUEST['address'] ;
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;

$conn = new mysqli("localhost", "root" , "" ,"mobile");

if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error); 
}

$sql="create table contact(
  name VARCHAR (30),
  email VARCHAR (30),
  address VARCHAR (30),
  message VARCHAR(150) 
) ";


  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
     $erroremail = "<font color='red'> Please specify a valid email address </font>";  
 }else{

$sql="insert into contact( name, email, address, message) values ( '$name', '$email', '$address', '$message' );";

if ($conn->query($sql) !== TRUE){
      echo "Error send : ". $conn->error;
  }else{  echo "<font color= 'green'>Message sent successfully</font> " ;

   }
}


  if (strlen($name) == 0){
    $errornanme = "<font color='red'> Please enter your name </font>";
  }
    if (strlen($message) == 0){
   
     $errormessage = "<font color='red'> Please enter your message </font>";
}

  if (strlen($address) == 0){ 
     $erroraddress = "<font color='red'> Please specify your address </font>";
  }


}

?>


        <div class="container-fluid">
            <div class="ro">
                <div class="col-sm-7 socialInfo">
                    <div class="w3-col m4 w3-container">
                        <img src="img/loc.jpg" class="w3-image w3-round" style="width:30%; background: transparent;">
                    </div>
                    <div class="w3-col m8 w3-panel">
                        <div class="w3-large w3-margin-bottom">
                            <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> West Bank, Palestine<br>
                            <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Nablus<br>
                        </div>
                    </div>
                    <div style="padding: 20px;">
                        <img src="img/GPS.PNG" alt="gps" width="800" height="600"/>
                    </div>
                </div>
                <div class="col-sm-4 inTouch" >
                    <h1 class="text-center">Get In Touch</h1><br><br>
                    <div class="container">
                        <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                            <div class="form-group">
                                <label for="name"> Name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" required=""name="name"><?php echo $errorname ;?>
                            </div>
                            <div class="form-group">
                                <label for="emailInput">Email</label>
                                <input type="email" class="form-control" id="emailInput" placeholder="Enter your email" required=""name="email">
                                <?php echo $erroremail ;?>
                            </div>
                            <div class="form-group">
                                <label for="emailInput">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Enter your address (Optional)"name="address"><?php echo $erroraddress ;?>
                            </div>
                            <div class="form-group">
                                <label for="emailInput">Your message</label>
                                <textarea class="form-control" id="theMessage" placeholder="Enter your message"name="message"></textarea><?php echo $errormessage ;?>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Send message">
                        </form>
                    </div>
                </div>
            </div>
        </div>






  <!-- footer -->
   <?php
       include "footer.php";
?>

    </body>
</html>