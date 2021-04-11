<!-- header -->

<?php

session_start();

$_SESSION['login']= false;
    ?>

<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Online Mobile</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main1.css">
        <link rel="stylesheet" href="css/company.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/mobileFilter.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            span{
                padding-left:10px;
            }
        </style>
        <script>
            function loadP1() {
                document.getElementById("page1").style.display = "block";
                document.getElementById("page2").style.display = "none";
            }
            function loadP2() {
                document.getElementById("page2").style.display = "block";
                document.getElementById("page1").style.display = "none";
            }
            function validation() {
                var coName, date, img, url, desc;
                coName = document.forms["publishing"]["coName"].value;
                date = document.forms["publishing"]["coDate"].value;
                img = document.forms["publishing"]["coImg"].value;
                url = document.forms["publishing"]["coURL"].value;
                desc = document.getElementById("coDescription").value;

                var imgURL, coURL;
                imgURL = img.substring(img.length - 4, img.length);

                coURL = url.substring(0, 4);

                if (coName === "" || date === "" || img === "" || url === "" || desc === "") {
                    alert("blanks must be filled out");
                    return false;
                }
                if (!(imgURL === ".jpg" || imgURL === ".png")) {
                    alert("Img must end with .jpg");
                    return false;
                }
                if (!(coURL === "www.")) {
                    alert("URL must start with www.");
                    return false;
                }
                return true;
            }
            
            function add() {
                if (!validation()) {
                    return;
                } else {
                    var wrapper = document.createElement("div");
                    wrapper.setAttribute("class", "column text-center requ val");
                    var arr_info = document.getElementsByTagName("input");
                    var desc = document.getElementById("coDescription").value;
                    wrapper.innerHTML = "<h2>" + arr_info[0].value + "</h2>" +
                            "<h5>" + arr_info[1].value + "</h5>" +
                            "<div class='imgDiv'>" +
                            "<img class='imgSize' src='" + arr_info[2].value + "' alt='1' />" +
                            "</div>" +
                            "<br>" +
                            "<a class='aStuff' href='http://" + arr_info[3].value + "'>" + arr_info[0].value + "</a>" +
                            "<br><br>" +
                            "<p class='description'>" +
                            desc +
                            "</p>"
                            ;
                    var CoWrap = document.getElementById("CoWrapper");
                    CoWrap.insertBefore(wrapper, CoWrap.childNodes[0]);
                    document.getElementById("success").style.display = "block";
                }
            }
            function searchAbout() {
                var input, filter, divs, requiredDivs, heading;
                input = document.getElementById("Input");

                filter = input.value.toUpperCase();
                divs = document.getElementsByClassName("requ");
                requiredDivs = document.getElementsByClassName("val");
                for (var i = 0; i < divs.length; i++) {
                    divs[i].style.display = "none";
                }
                for (var i = 0; i < requiredDivs.length; i++) {
                    heading = requiredDivs[i].getElementsByTagName("h2")[0];
                    if (heading.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        requiredDivs[i].style.display = "block";
                    } else {
                        requiredDivs[i].style.display = "none";
                    }
                }
            }
        </script>
    </head>
    <body style="background-color: lavender;">
        <header id="header">
              <div class="aboveNav" style="height: 12%;">
                <a href="mobile2.php"><img src="img/logo2.png" style="float: left; width: 15%; height: 155%;" alt="logo"/></a>
                 <form class="navbar-form" id="search" style="float: right;">
                    <div class="input-group">
                        <input id="Input" type="text" class="form-control" placeholder="Search" name="search" onkeyup="searchAbout()"/>
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit" disabled="">
                                <i class="glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                          
            </div>
            <nav class="navbar navColor">  

    <ul class="nav navbar-nav" style="padding-left: 10px; float: left;"> <!-- items -->
                
                   
 <li class="paddingLeft"><a href="mobile2.php"><i class="fa fa-mobile" style="font-size:36px;"></i> Mobile Phone</a></li>
 <?php if($_SESSION['login'] && !$_SESSION['type']){ ?>

      <li class="paddingLeft"><a href="contact.php"><i class="fa fa-envelope w3-xxlarge"></i> Contact Us</a></li>
      <li class="paddingLeft"><a href="about.php"><i class="fa fa-user w3-xxlarge"></i> About Us</a></li>
  <li class="paddingLeft"><a href="up.php"><i class="fa fa-upload" aria-hidden="true" style="font-size:36px;"></i>Upload</a></li>
        <?php }if($_SESSION['login'] && $_SESSION['type']){ ?>

                    <li class="paddingLeft"><a href="control.php"><i class="fa fa-cog" style="font-size:36px;"></i> Control</a></li>
<li class="paddingLeft"><a href="add.php"><i class="fa fa-plus" style="font-size:36px;"></i> Add Mobile</a></li>
     <?php }if(!$_SESSION['login']){ ?>

             <li class="paddingLeft"><a href="login.php"><i class="fa fa-user w3-xxlarge" style="font-size:36px;"></i> login</a></li>

<?php }if($_SESSION['login']){ ?>

            <li class="paddingLeft"><a href="logout.php"><i  class="fa fa-sign-out" style="font-size:36px;"></i> Log out</a></li>   
<?php } ?>


</ul>
 
            </nav>
        </header>

 </body>


    <div id="form">
       
        <h2 style="margin-left: 40%;">LOG IN </h2>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$username = $_REQUEST['user'];
$Password = $_REQUEST['pass'];

$conn = new mysqli("localhost", "root" , "" ,"mobile");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); }



    $sql = "select user ,pass from user";
    $result = $conn->query($sql);
   
    if( $username== "admin" && $Password == "123456"){
    $_SESSION['login'] = true;
    $_SESSION['type']=true;
    echo "<meta http-equiv='refresh' content='0; url=mobile2.php' />";
}elseif ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
             if($row['user'] == $username && $row['pass']==$Password ){
     $_SESSION['login'] = true ;
      $_SESSION['type'] = false ;
    echo "<meta http-equiv='refresh' content='0; url=mobile2.php' />";                             } 
          
        }
        echo "<div style='color:red;font-size:20px;text-align:center;'>check the user name and passowrd</div>";

    }else{
     
        $_SESSION['login'] = false;
        $_SESSION['type'] = false;
        echo "<div style='color:red;font-size:20px;text-align:center;'>check the user name and passowrd</div>";

    }

}

?>
<div style="margin-left: 40%;">
<?php $error=""; echo $error ;?>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
<input type="text" name="user" placeholder="User Name" class="in1" ><br>
<input type="Password" name="pass"  placeholder="Password" class="in1" ><br>
<input type="submit" name="sub" value="login" id="login"> <br>
</form>
 
</div>
    <div style='text-align:center;'>
        <a href='register.php' style="display:block;color:green;font-size:15px;"><h3>Creat New Account</h3></a>
    </div>
    </div>    
<!-- footer -->
<?php
include "footer.php";
?>