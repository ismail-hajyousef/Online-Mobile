<!DOCTYPE html>
<html>
<head>
  <title></title>

    <style>
      
       table{
             border: 2px solid black;
             width: 75%;
             text-align: center;

       }
       th{
          border: 2px solid black;
          width: 15%;
          text-align: center;
       }
       td{
          border: 2px solid black;
          width: 15%;
          text-align: center;
       }

    </style>

</head>
<body>

  <?php 

       include('header.php');

  ?>

    <table>
      <tr>
        <th>ID Number</th>
        <th>Name Mobile</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total Price</th>  
      </tr> 

    <?php 

        function totalPrice($price , $n){

           $num = $n * $price;
           return $num;
        } 

    ?>
    
    <?php   

       $conn = new mysqli("localhost" , "root" , "" , "mobile");

       $sql = "SELECT * FROM cart";
       $result = $conn->query($sql);

       if($result->num_rows > 0){
          while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row['mob_id'] . "</td>";
                echo "<td>" . $row['mob_name'] . "</td>";
                echo "<td>" . $row['mob_quantity'] . "</td>";
                echo "<td>" . $row['mob_price'] . "</td>";
                echo "<td>" . totalPrice($row['mob_price'] , $row['mob_quantity']). "</td>";
                echo "</tr>";
          }
       }
       else{

       }

  ?>

  <?php 

       include('footer.php');

  ?>

</body>
</html>