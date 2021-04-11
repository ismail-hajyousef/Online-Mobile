<?php

session_start();

 $name = $type = $image = $os =$color = $memory= $storage =$screen =$price =$desc  ="";

$errorname = $errortype = $errorimage = $erroros =$errorcolor = $errormemory= $errorstorage =$errorscreen =$errorprice =$errordesc  ="";

if($_SERVER["REQUEST_METHOD"] == "POST") {
  



$conn = new mysqli("localhost", "root", "","mobile");
 
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
      }
 

$sql="create table mobiles(
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  mob_name VARCHAR (255),
  mob_type VARCHAR (255),
  mob_image int (255),
  mob_os VARCHAR (255),
  mob_color VARCHAR (255),
  mob_memory VARCHAR (255),
  mob_storage VARCHAR (255),
  mob_screen VARCHAR (255),
  mob_price float,
  mob_desc text
) ";

if (strlen($name) == 0){
    $errornanme = "<font color='red'> Please enter Mobile name </font>";
  }if (strlen($type) == 0){
    $errortype = "<font color='red'> Please enter Mobile type </font>";
  }if (strlen($image) == 0){
    $errorimage = "<font color='red'> Please put image of your Mobile  </font>";
  }if (strlen($os) == 0){
    $erroros = "<font color='red'> Please enter Operating system of mobile </font>";
  }if (strlen($memory) == 0){
    $errormemory = "<font color='red'> Please enter  </font>";
  }if (strlen($color) == 0){
    $errorcolor = "<font color='red'> Please enter Mobile color </font>";
  }if (strlen($desc) == 0){
    $errordesc = "<font color='red'> Please put description of mobile </font>";
  }if (strlen($price) == 0){
    $errorprice = "<font color='red'> Please enter price of Mobile </font>";
  }if (strlen($storage) == 0){
    $errorstorage = "<font color='red'> Please enter Mobile storage </font>";
  }if (strlen($screen) == 0){
    $errorscreen = "<font color='red'> Please enter Mobile screen size </font>";
  }
}


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
        <header id="header"style="border:2px solid block;">
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
               

                                           <i style="font-size:  25px;"> <?php echo date("y-m-d");?></i>

         </div>


<?php if($_SESSION['login'] && $_SESSION['type']){ ?>
        <button style=" margin-right:280px; font-size:25px; background: transparent;border: none; float: right; margin-top: -3.5%; color: black;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#share">
                    Add Mobile <i class="fa fa-plus" style="font-size:25px;"></i>
                </button>
                <div class="modal fade" id="share" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content" style='background-color: #B8B4B4;'>
                           
                            <div class="modal-body">                                   
                                    
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" id="register-form" name="publishing" novalidate="novalidate" style="margin-left: 40%;color: black;">
                
                <div class="form-group">Trade mark</div>
                <input type="text" id="mark" name="mark" > 
                <br>

                <div class="form-group">Operating System</div>
                <input type="text" id="os" name="os" > 
                <br>
                
                <div class="form-group">Storage Capacity</div>
                <input type="password" id="storage" name="storage">
                <br>
                
                <div class="form-group">Type</div>
                <input type="type" id="type" name="storage">

                
                <div class="form-group">color</div>
                <input type="text" id="color" name="color" >
                <br>
                
                <div class="form-group">Screen Size</div>
                <input type="text" id="screen" name="screen" >
                <br>
                 <div class="form-group">RAM Memory Size</div>
                <input type="text" id="memory" name="memory"> 
                <br>
                 <div class="form-group">Price</div>
                <input type="text" id="memory" name="memory" > 
                <br>                               
                                    <div class="form-group">
                                        <label>description</label>
                                        <textarea class="form-control" id="coDescription" placeholder="Enter description"></textarea>
                                    </div>
                                </form>
                            </div>
                          
                            <div class="modal-footer">
                                <p id="success" style="color: green; display: none"><b>COMPANY ADDED</b></p>
                                <button onclick="add()" type="button" class="btn btn-primary" >Add</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
         </div> 
<?php } ?>

<div>
            <nav class="navbar navColor">  

    <ul class="nav navbar-nav" style="padding-left: 10px; float: left; border-color:#ffffff; border-style: solid ;width: 100%;"> <!-- items -->
                    

      <li class="paddingLeft"><a href="mobile2.php"><i class="fa fa-mobile" style="font-size:36px;"></i> Mobile Phone</a></li> 
<?php if($_SESSION['login'] && !$_SESSION['type']){ ?>
                       <li class="paddingLeft"><a href="contact.php"><i class="fa fa-envelope w3-xxlarge"style="font-size:36px;"></i> Contact Us</a></li>
                    
                    <li class="paddingLeft"><a href="about.php"><i class="fa fa-user w3-xxlarge"style="font-size:36px;"></i> About Us</a></li>

        <?php }if($_SESSION['login'] && $_SESSION['type']){ ?>

                    <li class="paddingLeft"><a href="control.php"><i class="fa fa-cog" style="font-size:36px;"></i> Control panel</a></li>
       <li class="paddingLeft"><a href="cart.php"><i class="fa fa-shopping-cart" style="font-size:36px;"></i> Cart</a></li>
     <?php }if(!$_SESSION['login']){ ?>

             <li class="paddingLeft"><a href="login.php"><i class="fa fa-user w3-xxlarge" style="font-size:36px;"></i> login</a></li>

 <?php }if($_SESSION['login']){ ?>

             <li class="paddingLeft"><a href="logout.php"><i class="fa fa-sign-out" style="font-size:36px;"></i> Log out</a></li>

<?php } ?>




</ul>
 
            </nav>
        </div>

        </header>
 </body>