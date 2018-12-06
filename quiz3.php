<html>
<head>
		<style>
	

		}
		.end
		{
			font size: 250%;
			font color: green;
		}
		body{
			background-color:#4FD900; background-size: 100%;
	}
		}
		h6{
			color:red;
			font-size:80%;
		}
		
		h3{
			font size: 80%;
		}
		h1{
			font-size: 90%;
		}
		p{
			font-size:90%;
		}
		
		.question{
			font size: 120%;
			
			color:black;
			padding: 10px;
			height:300px;
    background: linear-gradient(to bottom right, #002CDD 0%, #ff0000 100%)
		}
		.question2{
			font size: 120%;
			color:black;
			padding:10px;
			height: 300px;
    background: linear-gradient(to bottom right, #33ccff 0%, #ff99cc 100%)
		}
		.message{
			font-size: 200%;
			color:red;
		}
		#example1 {
		
    background-image:url(football.jpg) ;
    padding: 10px;
    color: white;
    margin-right: 100px;
    margin-left: 100px;
    margin-top:50px;
    border-radius: 20%;
    font-size:130%;
    color:black;
   
}
	</style>
	<body>
	<div id="example1">
		<br>
		<br>
		<center>
		TOTAL SCORE: </center>
		<?php

	$count=0;

	if(isset($_POST["answer1"]))
	{
		$ans1=$_POST["answer1"];

	}
	else
	{
		$ans1="NOT ANSWERED";
	}
	if(isset($_POST["answer2"]))
	{
		$ans2=$_POST["answer2"];

	}
	else
	{
		$ans2="NOT ANSWERED";
	}
	if(isset($_POST["answer3"]))
	{
		$ans3=$_POST["answer3"];

	}
	else
	{
		$ans3="NOT ANSWERED";
	}
	if(isset($_POST["answer4"]))
	{
		$ans4=$_POST["answer4"];

	}
	else
	{
		$ans4="NOT ANSWERED";
	}
	if(isset($_POST["answer5"]))
	{
		$ans5=$_POST["answer5"];

	}
	else
	{
		$ans5="NOT ANSWERED";
	}
	if(isset($_POST["answer6"]))
	{
		$ans6=$_POST["answer6"];

	}
	else
	{
		$ans6="NOT ANSWERED";
	}
	if(isset($_POST["answer7"]))
	{
		$ans7=$_POST["answer7"];

	}
	else
	{
		$ans7="NOT ANSWERED";
	}
	if(isset($_POST["answer8"]))
	{
		$ans8=$_POST["answer8"];

	}
	else
	{
		$ans8="NOT ANSWERED";
	}
	if(isset($_POST["answer9"]))
	{
		$ans9=$_POST["answer9"];

	}
	else
	{
		$ans9="NOT ANSWERED";
	}
	if(isset($_POST["answer10"]))
	{
		$ans10=$_POST["answer10"];

	}
	else
	{
		$ans10="NOT ANSWERED";
	}
	if(isset($_POST["answer11"]))
	{
		$ans11=$_POST["answer11"];

	}
	else
	{
		$ans11="NOT ANSWERED";
	}
	if(isset($_POST["answer12"]))
	{
		$ans12=$_POST["answer12"];

	}
	else
	{
		$ans12="NOT ANSWERED";
	}
	if(isset($_POST["answer13"]))
	{
		$ans13=$_POST["answer13"];

	}
	else
	{
		$ans13="NOT ANSWERED";
	}
	if(isset($_POST["answer14"]))
	{
		$ans14=$_POST["answer14"];

	}
	else
	{
		$ans14="NOT ANSWERED";
	}
	if(isset($_POST["answer15"]))
	{
		$ans15=$_POST["answer15"];

	}
	else
	{
		$ans15="NOT ANSWERED";
	}
	

	$servername="localhost";
	$username="id5878632_anand";
	$password="anand";
	$dbname="id5878632_cricket";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	// Check connection
	if (!$conn) 
	{
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql1= "SELECT CorrectAnswer FROM table11 WHERE Id like 1";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans1)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table11 WHERE Id like 2";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans2)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table11 WHERE Id like 3";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans3)
    	{
    		$count++;
    	}
    	
	}


	$sql1= "SELECT CorrectAnswer FROM table11 WHERE Id like 4";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans4)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table11 WHERE Id like 5";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans5)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table11 WHERE Id like 6";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans6)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table11 WHERE Id like 7";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans7)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table11 WHERE Id like 8";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans8)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table11 WHERE Id like 9";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans9)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table11 WHERE Id like 10";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans10)
    	{
    		$count++;
    	}
    	
	}	
	$sql1= "SELECT CorrectAnswer FROM table11 WHERE Id like 11";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans11)
    	{
    		$count++;
    	}
    	
	}
	$sql1= "SELECT CorrectAnswer FROM table11 WHERE Id like 12";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans12)
    	{
    		$count++;
    	}
    	
	}
	$sql1= "SELECT CorrectAnswer FROM table11 WHERE Id like 13";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans13)
    	{
    		$count++;
    	}
    	
	}
	$sql1= "SELECT CorrectAnswer FROM table11 WHERE Id like 14";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans14)
    	{
    		$count++;
    	}
    	
	}
	$sql1= "SELECT CorrectAnswer FROM table11 WHERE Id like 15";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans15)
    	{
    		$count++;
    	}
    	
	}


	$sql="INSERT INTO table8(count) values('$count')";
	if($conn->query($sql)=='TRUE')
	{
		echo "   ";
	
	}
?>
<h2>
	<br>
	<br><center><?php
	echo $count; 
	?></center></h2><center><h2> OUT OF 15 </h2> </center>
</h1>
</div>
<h2>
	<center><br>
		<br>
	<?php
$t = date("count");
if ($t > "10") {
    echo "GOOD TRY, HOPE FOR THE BEST NEXT TIME";
} elseif ($t <"10") {
    echo "well TRIED";
} 
?>

</center></h2>
<p><br>
	<h2><marquee behavior=scroll direction="right" scrollamount="30"><center> LET US GO THROUGH THE SOLUTION</center></marquee></p><BR>
	 <br>
	 <div class="question">
		<p>Q.1. Phileas Fogg stopped off in what is now Mumbai on his voyage around the world, but at which club in the city did Nicolas Anelka start his managerial journey?<h1>
		<br>
		<input type="radio" name="answer1" value="a"> MUMBAI UNITED<br>
		<input type="radio" name="answer1" value="b"> MUMBAI CITY<br>
		<input type="radio" name="answer1" value="c"> MUMBAI TIGHERS<br>
		<input type="radio" name="answer1" value="d"> BENGAL MUMBAI FC<br></h1>
	<p>YOUR ANSWER: <?php echo $ans1; ?>
	<h3><b>CORRECT ANSWER: B </b></h3></p></div><hr>
		<div class="question2">
		<p>Q.2. All four home nations – England, Scotland, Wales and Northern Ireland – played at the 1958 World Cup. Where did it take place?<br><h1>
		<input type="radio" name="answer2" value="a"> BRAZIL<br>
		<input type="radio" name="answer2" value="b"> AFRICA<br>
		<input type="radio" name="answer2" value="c"> SWEDAN<br>
		<input type="radio" name="answer2" value="d"> FRANCE<br></h1>
		<p>YOUR ANSWER: <?php echo $ans2; ?>
	<h3><b>CORRECT ANSWER: C </b></h3></p></div><hr>

			<div class="question">
		<p>Q.3. Northern Ireland will be making their European Championship debut this summer. Who was their top scorer in qualifying?<br><h1>
		<input type="radio" name="answer3" value="a"> JONNY EVANS<br>
		<input type="radio" name="answer3" value="b"> CHRIS BRUNT<br>
		<input type="radio" name="answer3" value="c"> STEVE DAVIS<br>
		<input type="radio" name="answer3" value="d"> KLYE LAFFERTY<br></h1>
		
		<p>YOUR ANSWER: <?php echo $ans3; ?>
	<h3><b>CORRECT ANSWER:  D</b></h3></p></div><hr>
		
<div class="question2">
		<p>Q.4. Eibar made their debut in La Liga in 2014. Which current Premier League player had a brief spell with the club?<br><h1>
		<input type="radio" name="answer4" value="a"> DAVID SILVA<br>
		<input type="radio" name="answer4" value="b"> JESUS NEVAS<br>
		<input type="radio" name="answer4" value="c"> AYOZE PERZE<br>
		<input type="radio" name="answer4" value="d"> CESIER AZPILICUTEA<br></h1>
		<p>YOUR ANSWER: <?php echo $ans4; ?>
	<h3><b>CORRECT ANSWER: A</b></h3></p></div><hr>
<div class="question">
		<p>Q.5. In whic year did the FIFA world cup began?<br><h1>
		<input type="radio" name="answer5" value="a"> 1930<br>
		<input type="radio" name="answer5" value="b"> 1908<br>
		<input type="radio" name="answer5" value="c"> 1926<br>
		<input type="radio" name="answer5" value="d"> 1922<br></h1>
		<p>YOUR ANSWER: <?php echo $ans4; ?>
	<h3><b>CORRECT ANSWER: A </b></h3></p></div><hr>
<div class="question2">
		<p>Q.6. what major historical event prevented two FIFA World Cup tournament from being held?<br><h1>
		<input type="radio" name="answer6" value="a"> VIETNAM WAR<br>
		<input type="radio" name="answer6" value="b"> 1969 MOON LANDING<br>
		<input type="radio" name="answer6" value="c"> 1941 ATTACK ON PEARL HARBOUR<br>
		<input type="radio" name="answer6" value="d"> THE WORLD WAR 2<br></h1>
		<p>YOUR ANSWER: <?php echo $ans6; ?>
	<h3><b>CORRECT ANSWER: D</b></h3></p></div><hr>
<div class="question">
		<p>Q.7. Who won the FIFA World cup held in 2006? </br><h1>
		<input type="radio" name="answer7" value="a"> ITALY <br>
		<input type="radio" name="answer7" value="b"> BRAZIL<br>
		<input type="radio" name="answer7" value="c"> GERMANY <br>
		<input type="radio" name="answer7" value="d"> MEXICO<br></h1>
		<p>YOUR ANSWER: <?php echo $ans7; ?>
	<h3><b>CORRECT ANSWER: A </b></h3></p></div><hr>
	<div class="question2">
		<p>Q.8. Who won the FIFA World cup held in 2006? </br><h1>
		<input type="radio" name="answer7" value="a"> ITALY <br>
		<input type="radio" name="answer7" value="b"> BRAZIL<br>
		<input type="radio" name="answer7" value="c"> GERMANY <br>
		<input type="radio" name="answer7" value="d"> MEXICO<br></h1>
		<p>YOUR ANSWER: <?php echo $ans8; ?>
	<h3><b>CORRECT ANSWER: A </b></h3></p></div><hr> 
<div class="question">
		<p>Q.9. What is the best standing the Uninted states has ever earned in the  football World cup? <br><h1>
		<input type="radio" name="answer9" value="a"> FIRST PLACE<br>
		<input type="radio" name="answer9" value="b"> SECOND PLACE<br>
		<input type="radio" name="answer9" value="c"> THIRD PLACE<br>
		<input type="radio" name="answer9" value="d"> TWELFTH PLACE<br></h1>
		<p>YOUR ANSWER: <?php echo $ans8; ?>
	<h3><b>CORRECT ANSWER: C</b></h3></p></div><hr>
		<div class="question2">
		<p>Q.10. Which nation won the world cup in 1930</br><h1>
		<input type="radio" name="answer10" value="a"> URUGUAY<br>
		<input type="radio" name="answer10" value="b"> BRAZIL<br>
		<input type="radio" name="answer10" value="c"> ITALY<br>
		<input type="radio" name="answer10" value="d"> ARGENTINA<br></h1>
		<p>YOUR ANSWER: <?php echo $ans10; ?>
	<h3><b>CORRECT ANSWER: A </b></h3></p></div><hr>
		<div class="question">
		<p>Q.11. How old was Pele  when he made his world cup debut for Brazil? <br><h1>
		<input type="radio" name="answer11" value="a"> 16<br>
		<input type="radio" name="answer11" value="b"> 17<br>
		<input type="radio" name="answer11" value="c"> 18<br>
		<input type="radio" name="answer11" value="d"> 19 <br></h1>
		<p>YOUR ANSWER: <?php echo $ans11; ?>
	<h3><b>CORRECT ANSWER: B</b></h3></p></div><hr>
		<div class="question2">
		<p>Q.12. Mexico stepped in to host the 1986 World cup instead of whom??  <br><h1>
		<input type="radio" name="answer12" value="a"> COLOMBIA<br>
		<input type="radio" name="answer12" value="b"> PARAGUAY<br>
		<input type="radio" name="answer12" value="c"> CHILE<br>
		<input type="radio" name="answer12" value="d"> ARGENTINA<br></h1>
		<p>YOUR ANSWER: <?php echo $ans12; ?>
	<h3><b>CORRECT ANSWER: A </b></h3></p></div><hr>
		<div class="question">
		<p>Q.13. Who scored a World cup record of five goal in one game against Cameroon in USA 1994? <br><h1>
		<input type="radio" name="answer13" value="a"> HRISTO STOICHKOV<br>
		<input type="radio" name="answer13" value="b"> OLEG SALENKO<br>
		<input type="radio" name="answer13" value="c"> ROMARIO<br>
		<input type="radio" name="answer13" value="d"> ROBERTO BAGGIO <br></h1>
		
		<p>YOUR ANSWER: <?php echo $ans13; ?>
	<h3><b>CORRECT ANSWER: B </b></h3></p></div><hr>
		<div class="question2">
		<p>Q.14. Who was the first team to qualify for 2014 World cup excluding brazil? </br><h1>
		<input type="radio" name="answer14" value="a"> AUSTRALIA<br>
		<input type="radio" name="answer14" value="b"> JAPAN<br>
		<input type="radio" name="answer14" value="c"> IRAN<br>
		<input type="radio" name="answer14" value="d"> NETHERLAND<br></h1>
		<p>YOUR ANSWER: <?php echo $ans14; ?>
	<h3><b>CORRECT ANSWER: B </b></h3></p></div><hr>
		<div class="question">
		<p>Q.15. Who was the only nation to remain unbeaten throughout the 2010 World cup ? <br><h1>
		<input type="radio" name="answer15" value="a"> SPAIN<br>
		<input type="radio" name="answer15" value="b"> SLOVAKIA<br>
		<input type="radio" name="answer15" value="c"> NEW ZELAND<br>
		<input type="radio" name="answer15" value="d"> GERMANY<br></h1>
		<p>YOUR ANSWER: <?php echo $ans15; ?>
	<h3><b>CORRECT ANSWER: C </b></h3></p></div><hr>
	</div>
<div class="end" text align="center">
	<h1> THANK YOU</h1>
	
</div>
<div class="session">
<form method="post" action="index.html">
	<tr>
		<center>
			
		<td><button align="right" href=""> ANOTHER TOPIC</button></td></center>

</tr></form>

			<CENTER>
	<a href="http://google.com"><h6> EXIT</h6></a>

</CENTER>



</body>

</head>
	</html>