<?php
// Start the session
session_start();
if(!isset($_SESSION["user"]))
{
  header('Location:index');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SOORYANGAD CONSULTANCIES</title>
  <meta charset="utf-8">
  <link rel="icon" href="images1/bc2d12_0ffa3704148646cf804385a559469c48~mv2_d_2278_1292_s_2.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="dist/typer.min.js"></script>
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Ranchers" rel="stylesheet">
  
  <!--ass-->
<link rel="stylesheet" type="text/css" href="css1/examcss.css">

</head>
<body>
  <button  id="myBtn"><i class="fa fa-arrow-up"></i></button>
<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" style="color:black;" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span   class="icon-bar"></span>
        <span  class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="font-family: 'Ranchers', cursive;">Olympiad<span style="color: white;">2018</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" id="a1">
        <li class="active"><a href="#" style="font-family: 'Ranchers', cursive;">AboutUs</a></li>
        <li><a href="#" data-toggle="modal" data-target="#query" style="font-family: 'Ranchers', cursive;"><span class="glyphicon glyphicon-question-sign"></span>&nbsp&nbspQueries</a></li>
    
        <li class="dropdown">
        
          <a href="#" style="font-family: 'Ranchers', cursive;"><span class="glyphicon glyphicon-zoom-out" ></span>&nbsp&nbspQuickSearch For Question?<span class="caret"></span></a>
          <ul  class="dropdown-menu">
             <input class="form-control" id="myInput" type="text" placeholder="Enter Question no...">
            <div class="ah" style="font-family: 'Ranchers', cursive;">
            <li><a href="#" class="butt" id="ques1">Question no:1</a></li>
            <li><a href="#" class="butt" id="ques2">Question no:2</a></li>
            <li><a href="#" class="butt" id="ques3">Question no:3</a></li>
            <li><a href="#" class="butt" id="ques4">Question no:4</a></li>
            <li><a href="#" class="butt" id="ques5">Question no:5</a></li>
            <li><a href="#" class="butt" id="ques6">Question no:6</a></li>
            <li><a href="#" class="butt" id="ques7">Question no:7</a></li>
            <li><a href="#" class="butt" id="ques8">Question no:8</a></li>
            <li><a href="#" class="butt" id="ques9">Question no:9</a></li>
            <li><a href="#" class="butt" id="ques10">Question no:10</a></li>
            </div>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right" id="a1">

        <li><a href="#" style="font-family: 'Ranchers', cursive;" id="demo"></a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-family: 'Ranchers', cursive;"><span class="glyphicon glyphicon-user" ></span>&nbsp&nbsp<?php echo $_SESSION["user"];?></a>
          </li>
        <li><a href="#"  data-toggle="modal" data-target="#dashboard" style="font-family: 'Ranchers', cursive;"><span class="glyphicon glyphicon-home" ></span>&nbsp&nbspDashboard</a></li>
      </ul>
    </div>
  </div>
</nav>


<br><br>
<form action="logiccorrection" method="post" id="dateForm" style="font-family: 'Ranchers', cursive;">
   <div class="container-fluid" id="1">
  
    <div class="tick" >
   <h1>1.Tanya is older than Eric.<br>
Cliff is older than Tanya.<br>
Eric is older than Cliff.?<br>
If the first two statements are true, the third statement is</h1>
   
  <input type="radio" name="numbers" value="true" >true<br>
  <input type="radio" name="numbers" value="false">false<br>
  <input type="radio" name="numbers" value="uncertain">uncertain<br><br> 

</div>
</div>
<br>
 <div class="container-fluid" id="2">

    <div class="tick">
   <h1>2.Blueberries cost more than strawberries.<br>
Blueberries cost less than raspberries.<br>
Raspberries cost more than both strawberries and blueberries.?<br>
If the first two statements are true, the third statement is</h1>
  <input type="radio" name="animals" value="true">true<br>
  <input type="radio" name="animals" value="false">false<br>
  <input type="radio" name="animals" value="uncertain">uncertain<br><br> 

</div>
</div>
 <div class="container-fluid" id="3">

    <div class="tick">
   <h1>3.All the trees in the park are flowering trees.<br>
Some of the trees in the park are dogwoods.<br>
All dogwoods in the park are flowering trees.?<br>
If the first two statements are true, the third statement is</h1>
  <input type="radio" name="authors" value="true">true<br>
  <input type="radio" name="authors" value="false">false<br>
  <input type="radio" name="authors" value="uncertain">uncertain<br><br> 

</div>
</div>
 <div class="container-fluid" id="4">

    <div class="tick">
       <h1>4.Mara runs faster than Gail.<br>
Lily runs faster than Mara.<br>
Gail runs faster than Lily.?<br>
If the first two statements are true, the third statement is</h1>
  <input type="radio" name="science" value="true">true<br>
  <input type="radio" name="science" value="false">false<br>
  <input type="radio" name="science" value="uncertain">uncertain<br><br> 

</div>
</div>
 <div class="container-fluid" id="5">

    <div class="tick">
    <h1>5.Apartments in the Riverdale Manor cost less than apartments in The Gaslight Commons.<br>
Apartments in the Livingston Gate cost more than apartments in the The Gaslight Commons.<br>
Of the three apartment buildings, the Livingston Gate costs the most.?<br>
If the first two statements are true, the third statement is</h1>
  <input type="radio" name="sense" value="true">true<br>
  <input type="radio" name="sense" value="false">false<br>
  <input type="radio" name="sense" value="uncertain">uncertain<br><br> 

</div>
</div>
 <div class="container-fluid" id="6">

    <div class="tick">
    <h1>6.The Kingston Mall has more stores than the Galleria.<br>
The Four Corners Mall has fewer stores than the Galleria.<br>
The Kingston Mall has more stores than the Four Corners Mall.?<br>
If the first two statements are true, the third statement is</h1>
  <input type="radio" name="flag" value="true">true<br>
  <input type="radio" name="flag" value="false">false<br>
  <input type="radio" name="flag" value="uncertain">uncertain<br><br> 

</div>
</div>
 <div class="container-fluid" id="7">

    <div class="tick">
    <h1>7.All the tulips in Zoe's garden are white.<br>
All the pansies in Zoe's garden are yellow.<br>
All the flowers in Zoe's garden are either white or yellow?<br>
If the first two statements are true, the third statement is</h1>
  <input type="radio" name="party" value="true">true<br>
  <input type="radio" name="party" value="false">false<br>
  <input type="radio" name="party" value="uncertain">uncertain<br><br> 

</div>
</div>
 <div class="container-fluid" id="8">

    <div class="tick">
    <h1>8.During the past year, Josh saw more movies than Stephen.<br>
Stephen saw fewer movies than Darren.<br>
Darren saw more movies than Josh.?<br>
If the first two statements are true, the third statement is</h1>
  <input type="radio" name="writer" value="true">true<br>
  <input type="radio" name="writer" value="false">false<br>
  <input type="radio" name="writer" value="uncertain">uncertain<br><br> 

</div>
</div>
 <div class="container-fluid" id="9">

    <div class="tick">
    <h1>9.Rover weighs less than Fido.<br>
Rover weighs more than Boomer.<br>
Of the three dogs, Boomer weighs the least.?<br>
If the first two statements are true, the third statement is</h1>
  <input type="radio" name="place" value="true">true<br>
  <input type="radio" name="place" value="false">false<br>
  <input type="radio" name="place" value="uncertain">uncertain<br><br> 

</div>
</div>
 <div class="container-fluid" id="10">

    <div class="tick">
    <h1>10.All the offices on the 9th floor have wall-to-wall carpeting.<br>
No wall-to-wall carpeting is pink.<br>
None of the offices on the 9th floor has pink wall-to-wall carpeting.?<br>
If the first two statements are true, the third statement is</h1>
  <input type="radio" name="study" value="true">true<br>
  <input type="radio" name="study" value="false">false<br>
  <input type="radio" name="study" value="uncertain">uncertain<br><br> 

</div>
</div>

<div class="container-fluid">
  <center><button type="submit" class="btn btn-info">Submit</button></center>
</div>
</form>
<br><br><br>

<script type="text/javascript">
   var myVar = setInterval(myTimer, 1000);
var sec="0",min="0",hour="0",com;
function myTimer() {
    sec++;
com=hour+":"+"hours"+min+":"+"min"+":"+sec+"sec";
    document.getElementById("demo").innerHTML = com;
    if(sec==60)
    {
      min++;
      sec=0;
    }
    if(min==0 && sec==50)
    {
      document.getElementById('dateForm').submit();
    }
}

 </script>
<div class="modal fade" id="dashboard" role="dialog">
    <div class="modal-dialog modal-lg" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" style="font-size:50px;" data-dismiss="modal">&times;</button>
 <center><div class="men" style="width:75%;padding:30px;">
<center><h1 class="modal-title" style="font-family: 'Ranchers', cursive;color:black;">Dash<span style="color: white;">board</span></h1></center></div></center></div>
        <div class="modal-body">
           <div class="container-fluid">
    <div class="lick" style="font-family: 'Ranchers', cursive;">
      <?php
      $servername = "localhost";
$username = "root";
$password = "";
$dbname = "answers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn-> connect_error) {
    die("Connection failed: " . $conn-> connect_error);
} 

$user = $_SESSION["user"];

if($_SESSION["completed"]== 1)
{
  $_SESSION["status"]="Completed";
}
else
{
    $_SESSION["status"]="NotCompleted";
}

$status=$_SESSION["status"];

$sql = "SELECT NAME,EMAIL,MOBILEPHONE,ADDRESS,MARKS,RANK,PRACTICE FROM signup WHERE NAME='$user'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc())
{
  
  echo "<h1>Name:" . $row['NAME'] . "</h1>";
  echo "<h1>Email:" . $row['EMAIL'] . "</h1>";
  echo "<h1>Phonenumber:" . $row['MOBILEPHONE'] . "</h1>";
  echo "<h1>Address:" . $row['ADDRESS'] . "</h1>";
  echo "<h1>Marks:" . $row['MARKS']. "</h1>";
  echo "<h1>CurrentRank:". $row['RANK'] ."</h1>";
  echo "<h1>ExamStatus:". $status ."</h1>";
  echo "<h1>PracticeExam(Latest):". $row['PRACTICE'] ."</h1>";
  
  

      
}
}
else {
    echo "Nothing";
}

$conn->close();
      ?>
 </div>
      </div>
        </div>
        
      </div>
      
    </div>
  </div>

      <footer style="text-align: center;">
            <div class="container-fluid" style="background:#00BFFF;padding-top: 20px;">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="color:gainsboro;">
                        <h3 style="font-family: 'Ranchers', cursive;color:white">
                            <strong>ABOUT<span style="font-family: 'Ranchers', cursive;color: black;">US</span></strong>
                        </h3>
                        <p style="color:white">
                            We believe that life-long learning is important to stay ahead throughout your professional career and that professional training and certification is one of the best investments you can make in yourself. Sooryangad is diversified and gives comprehensive training options offer you the flexibility to incorporate ongoing professional development into your already busy schedule.
                        </p>
                    </div>
              
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="color:gainsboro;">
                        <h3 style="font-family: 'Ranchers', cursive;color:white">
                            <strong>ME <span style="font-family: 'Ranchers', cursive;color: black;">NU</span></strong>
                        </h3>
                        <a href="#" style="color:white;text-decoration:none;">Home</a><br><a href="#" style="color:white;text-decoration:none;">PracticeExam</a><br><a href="#" data-toggle="modal" data-target="#query" style="color:white;text-decoration:none;">Queries</a><br>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="color:gainsboro;">
                            <div>
                        <h3 style="font-family: 'Ranchers', cursive;color:white">
                            <strong>CONTACT<span style="font-family: 'Ranchers', cursive;color: black;"> US</span></strong>
                        </h3>
                        <p style="color:white">
                        
            contact.sooryangad@gmail.com<br>
            +91-9868629764<br><br><br>

             <a  href="https://www.facebook.com/sooryangad" target="_blank" style="cursor: pointer;" id="wer"><i class="fa fa-facebook-square"></i></a>
    <a  style="cursor: pointer;" id="wer"><i class="fa fa-google"></i></a>
    <a  style="cursor: pointer;" id="wer"><i class="fa fa-twitter"></i></a>

                        </p>
                            </div>
                         
            </div>
            </div>
            </div>
        </footer>

  <div class="modal fade" id="query" role="dialog">
    <div class="modal-dialog " >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" style="font-size:50px;" data-dismiss="modal">&times;</button>
  
    <center><div class="men" style="width:75%;">
<center><h1 style="font-family: 'Ranchers', cursive;color:black;">QUER<span style="color: white;">IES</span></h1></center>
</div></center>
</div>
<div class="modal-body">
           <div class="container-fluid">
    <div class="lick">
<form  action="query" method="post">
  <div class="form-group" >
    <label for="name">Name</label>
    <input type="name"  class="form-control" id="name" name="name" title="Enter your name" placeholder="Name....." required>
  </div>
   <div class="form-group" >
    <label for="name">Email</label>
    <input type="email" class="form-control" id="email" name="email" title="Enter your email" placeholder="Email....." required>
  </div>
   <div class="form-group" >
    <label for="comment">Query</label>
    <input type="comment" class="form-control"  id="comment" name="comment" title="Leave your Query" placeholder="Query....." required>
  </div>
  <button type="submit" class="btn btn-info">Submit</button>
  <center><p style="font-family: 'Ranchers', cursive;">@ 2018<span style="color: black;">Olympiad</span></p></center>
</form>
</div>
      </div>
        </div>
        
      </div>
      
    </div>
  </div>
<script type="text/javascript">
  
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
$('#myBtn').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 2000);
    return false;
 });
</script>

 <script type="text/javascript" src="js/olympiad.js"></script> 
</body>
</html>

      