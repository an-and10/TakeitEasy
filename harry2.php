<html>
<body>

	<style>

	body{background-image:url("aku.jpg") ;background-size: 100%;
	background-attachment: fixed;
color:white;}
 div { 
 	border-color: yellow;
 	border-radius: 20PX: 
	border:8px ;
	color:blue;
	border-style:double;background-color: transparent;
	margin-top: 11px;
    margin-bottom: 100px;
    margin-right: 400px;
    margin-left: 400px;
	}
h1{
	color:red;
	font-size:130%;
}
h3{
	font-size:150%;
	color:black;
}

</style>
<?php


$player=$_POST["uname"];
$name=$_POST["name"];
$email=$_POST["email"];

$servername="localhost";
$username="id";
$password="ana";
$dbname="id58";
$f=0; 
	$conn=mysqli_connect($servername, $username,$password,$dbname );
	
if($conn){
	echo " ";}
	else
	{
		echo " ";
	}


	$sqli="SELECT username,name,email FROM table4";
$result=mysqli_query($conn,$sqli);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		if($row['email']==$email)
		{


		$f=1;
		break;
		}
	}

if($f==1)
{ 
	echo "WARNING! THIS EMAIL IS ALREADY REGISTERED PLEASE CLICK BELOW TO CHOSE ANOTHER QUIZ CONTEST ";


}
else
 {
	$sql="INSERT INTO table4(username,name,email) values('$player','$name','$email')";
	if($conn->query($sql)=='TRUE')
	{
	echo "YOU HAVE SUCCESSFULLY REGISTERED";
	}
	else
	{
		 echo "FAILED TO LOGIN";
	}
 }
}

?>
<CENTER>
	<div>
<h3> YOUR DETAILS ARE:</h3><br>
<h2> USERNAME: 
	<?php
	echo $player; 
	?><br>
	NAME: 
	<?php
	echo $name; 
	?>
	<br>
	EMAIL: 
	<?php
	echo $email; 
	?>
	
	</h2>
</div></CENTER><br>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideDown("slow");
    });
});
</script>
 
<style> 
#panel, #flip {
    padding: 15px;
    text-align: center;
    background-color: yellow;
    border: solid 3px navy;
}

#panel {
    padding: 10px;
    display: none;
}
</style>
</head>
<body>
 
<div id="flip">click me  to read instruction</div>
<div id="panel">THIS IS HISTORICAL CRICKET QUIZ<BR>
<input type="radio">THIS QUIZ CONSIST OF 15 QUESTION WITH A TIME LIMIT OF 180 SECONDS<BR>
<input type="radio">THERE IS NO TIME FOR PER QUESTION<BR>
<BR><input type="radio">AFTER ANSWERING ALL THE QUESTION, CLICK THE SUBMITT BUTTON</BR>
<input type="radio">EACH CORRECT ANSWER WILL FETCH YOU 1 VALUABLE POINTS<BR>
<B>SCORE WIll BE DISPLAYED </B><BR>
<input type="radio">HAVE PATIENCE AND PLAY THE QUIZ<BR>
<input type="radio">WAIT AND SEE THE SOLUTION OF EACH QUESTION AFTER THE SCORE<BR>
<b>CLICK BELOW TO START THE QUIZ</b>
</BR>
</BR>
</div>

</body>
<body>
	<center>
	<?php
	if($f==1)
	echo 
		"<h1><a href='quizup.html'>CLICK HERE TO  GO BACK</a><h1></marquee></center>";
	else
		 echo 
      "<h1><a href='gif2b.html'>START THE QUIZ</a><h1></marquee></center>";
	?>
</center>
</body>
</body>
</html>
