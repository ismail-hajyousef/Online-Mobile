         <?php

include "header.php" ;
     
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

<?php
$conn = new mysqli("localhost", "root", "","mobile");
 
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
      }


$sql="select * from user";

    $result = $conn->query($sql);

echo "<table border='1' width='85%'style='margin-left: 8%; text-align: center;'>";
  echo "  <tr class='user' style='text-align: center;'>
        <th>Id</th>
        <th>Name</th>
        <th>User Name</th>
        <th>Passowrd</th>
        <th>Email</th>
        <th>Address</th>
        <th>Number</th>
        <th>Visa Card number</th>
        <th>Delete</th>
    </tr>
";


    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            echo "<tr><td>" . $row['id'];
            echo "<td>" . $row['name'];
            echo "<td>" . $row['user'];
            echo "<td>" . $row['pass'];
            echo "<td>" . $row['email'];
            echo "<td>" . $row['address'];
            echo "<td>" . $row['number'];
            echo "<td>" . $row['visa'];
?>  
                  

  <?php 
        echo "<td align=center> <input type='checkbox' name='delete' value=".$row['id'].">
         <input type='submit' value='delete' style='border-radius: 25px;border: 1px solid #3B424C;'></td>";
        }
        echo "</table>";
    }

 ?>

<input type="hidden" name="flag" value="1">

</form>


<?php
if($_SERVER['REQUEST_METHOD'] == "POST" && $_REQUEST['flag']=="1"){

$delete=$_REQUEST['delete'];

$conn = new mysqli("localhost", "root", "","mobile");
 
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
      }
    $sql ="delete from user where id=$delete";


    $result = $conn->query($sql);


        echo "<meta http-equiv='refresh' content='0; url=control.php'>";

}


?>

   <h2 style="margin-left: 40%;"> Messages</h2>


<?php

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
      }


$sql="select * from contact";

    $result = $conn->query($sql);


    if ($result->num_rows > 0) {



        echo "<table border width='70%'style='margin-left: 15%;text-align: center;'>";
        echo "<th> Name  <th> Email <th> Address <th> Messages";
        while($row = $result->fetch_assoc()){
            echo "<tr><td>" .  $row['name'];
            echo "<td>" . $row['email'];
            echo "<td>" . $row['address'];
            echo "<td>" .$row['message'];      

              }
        
        echo "</table>";
    }


    ?>
              

<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && $_REQUEST['flag']=="3") {
  
$user=$_REQUEST['user'];
  $newuser = $_REQUEST['newuser'] ;
  $pass = $_REQUEST['pass'] ;
  $name = $_REQUEST['name'] ;
  $address = $_REQUEST['address'] ;
  $email = $_REQUEST['email'] ;
  

$conn = new mysqli("localhost", "root", "","mobile");
 
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
      }
if($name != ""){
$sql ="UPDATE user SET name='$name' WHERE user='$user'";
    $result = $conn->query($sql);
}

if($user != ""){
$sql ="UPDATE user SET user='$user' WHERE user='$user'";
    $result = $conn->query($sql);
}
if($pass != ""){
$sql ="UPDATE user SET pass='$pass' WHERE user='$user'";
    $result = $conn->query($sql);
}
if($address != ""){
$sql ="UPDATE user SET address='$address' WHERE user='$user'";
    $result = $conn->query($sql);
}
if($email != ""){
$sql ="UPDATE user SET email='$email' WHERE user='$user'";
    $result = $conn->query($sql);
}

        echo "<meta http-equiv='refresh' content='0; url=control.php'>";

}

?>


<?php

include "footer.php" ;
     ?>