<html>
<head>
	
		<style>
		.end
		{
			font size: 250%;
			font color: green;
		}
		body{
			background-image:url("cricket.jpg");
	}
		}
		h3{
			font size: 130%;
		}
		h6{
			color:red;
			font-size:80%;
		}
		
		
		div.anand{
			font size: 140%;
			
			color:black;
			padding: 10px;
			height:300px;
    background: linear-gradient(to bottom right, #66ff66 0%, #ff0000 100%)
		}
		div.priya{
			font size: 140%;
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
    background-image: url("h1.gif");
    padding: 10px;
    color: white;
    margin-right: 100px;
    margin-left: 100px;
    margin-top:40px;
    margin-bottom:1px;
    font-size: 150%;
   
}
#session{
	padding:40px;
}

	</style>
	<body>
	<div id="example1">
		<h1><center>
		TOTAL SCORE: </center></h1>
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
	$password="anand123";
	$dbname="id5878632_cricket";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	// Check connection
	if (!$conn) 
	{
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql1= "SELECT CorrectAnswer FROM table3 WHERE Id like 1";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans1)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table3 WHERE Id like 2";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans2)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table3 WHERE Id like 3";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans3)
    	{
    		$count++;
    	}
    	
	}


	$sql1= "SELECT CorrectAnswer FROM table3 WHERE Id like 4";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans4)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table3 WHERE Id like 5";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans5)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table3 WHERE Id like 6";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans6)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table3 WHERE Id like 7";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans7)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table3 WHERE Id like 8";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans8)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table3 WHERE Id like 9";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans9)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table3 WHERE Id like 10";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans10)
    	{
    		$count++;
    	}
    	
	}	
	$sql1= "SELECT CorrectAnswer FROM table3 WHERE Id like 11";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans11)
    	{
    		$count++;
    	}
    	
	}
	$sql1= "SELECT CorrectAnswer FROM table3 WHERE Id like 12";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans12)
    	{
    		$count++;
    	}
    	
	}
	$sql1= "SELECT CorrectAnswer FROM table3 WHERE Id like 13";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans13)
    	{
    		$count++;
    	}
    	
	}
	$sql1= "SELECT CorrectAnswer FROM table3 WHERE Id like 14";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans14)
    	{
    		$count++;
    	}
    	
	}
	$sql1= "SELECT CorrectAnswer FROM table3 WHERE Id like 15";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans15)
    	{
    		$count++;
    	}
    	
	}

	
	$sql="INSERT INTO table4(count) values('$count')";
	if($conn->query($sql)=='TRUE')
	{
	echo "success ";
	}
?>
<h1><br>
	<br><center><?php
	echo $count; 
	?>  OUT OF 15</center>
</h1>
</div>
<h2>
	<center><br>
		<br>
	<?php
$t = date("count");
if ($t < "5") {
    echo "Better luck next time!";
} elseif ($t > "7") {
    echo "well played";
} 
?>

</center></h2>
<p>
	<h2><marquee behavior=scroll direction="top" scrollamount="30"><center> LET US GO THROUGH THE SOLUTION</center></marquee></p>
	 <br>
	 <br>
<div class="anand">
<p>Q.1.  Which flamboyant umpire from New zeland gives batsmen out with a bent index finger due to arthristis?<br>
		<input type="radio" name="answer1" value="a"> Steve Davis<br>
		<input type="radio" name="answer1" value="b"> Daryl Harper<br>
		<input type="radio" name="answer1" value="c"> Billy Bowden<br>
		<input type="radio" name="answer1" value="d"> Tony Hill<br>
		<p>YOUR ANSWER: <?php
	echo $ans1; 
	?></p>
	<h3><b>CORRECT ANSWER  :  C</b></h3></p></div><hr>
<div class="priya">
		<p>Q.2. The world’s top cricketers were auctioned off for the DLF Indian Premier League in Mumbai on February 20, 2008. Which cricketer attracted the highest price ? <br>
		<input type="radio" name="answer2" value="a"> Sachin Tendulkar<br>
		<input type="radio" name="answer2" value="b"> Mahendra Sign Dhoni<br>
		<input type="radio" name="answer2" value="c"> Sourav Gnaguly<br>
		<input type="radio" name="answer2" value="d"> Yuvraj Singh<br>
		<p>YOUR ANSWER :  <?php
	echo $ans2; 
	?></p>
	<h3><b>CORRECT ANSWER  :  B</b></h3></p></div><hr>
		<div class="anand">
		<p>Q.3. Where did the 1st ODI match was played in India ?<br>
		<input type="radio" name="answer3" value="a">Mohali<br>
		<input type="radio" name="answer3" value="b">Delhi<br>
		<input type="radio" name="answer3" value="c">Aheddabad<br>
		<input type="radio" name="answer3" value="d">Kolkata<br>
		<p>YOUR ANSWER: <?php echo $ans3;  ?></p>
	<h3><b>CORRECT ANSWER  : C </b></h3></p></div><hr>
		<div class="priya">
		<p>Q.4. The cricketer who became the brand Ambassador of 'Indigo Nation' is— <br>
		<input type="radio" name="answer4" value="a">Sachin Tendulkar<br>
		<input type="radio" name="answer4" value="b">Mahendra Singh Dhoni<br>
		<input type="radio" name="answer4" value="c">Anil kumble<br>
		<input type="radio" name="answer4" value="d">Sourav ganguly<br>
		<p>YOUR ANSWER: <?php echo $ans4;  ?>
	<h3><b>CORRECT ANSWER  : C </b></h3></p></div><hr>
		<div class="anand">
		<p>Q.5. The highest wicket taker in test matches is now— </p>
		<input type="radio" name="answer5" value="a">Shane Warne<br>
		<input type="radio" name="answer5" value="b">Muthia Murlidharan<br>
		<input type="radio" name="answer5" value="c">Brett Lee<br>
		<input type="radio" name="answer5" value="d">Dannis Liee<br>
<p>YOUR ANSWER:<?php echo $ans5; ?>
	<h3><b>CORRECT ANSWER: B </b></h3></p></div><hr>
	<div class="priya">
		<p>Q.6. Who scored the most runs in a single First class innings?</p>
		<input type="radio" name="answer6" value="a"> Vinod Kambli<br>
		<input type="radio" name="answer6" value="b"> Sachin Tendulakr<br>
		<input type="radio" name="answer6" value="c"> Don brandman<br>
		<input type="radio" name="answer6" value="d"> Brian Lara<br>
		<p>YOIUR ANSWER: <?php echo $ans6; ?>
	<h3><b>CORRECT ANSWER: D</b></h3></p></div><hr>
<div class="anand">
		<p>Q.7. Who is the first cricket player from Kerala to make a test debut ? </p>
		<input type="radio" name="answer7" value="a">  T. Krishnan <br>
		<input type="radio" name="answer7" value="b">  T. S. Shekar <br>
		<input type="radio" name="answer7" value="c">  T. Yohannan <br>
		<input type="radio" name="answer7" value="d">  R. Somasunder<br>
		<p>YOUR ANSWER: <?php echo $ans7; ?>
	<h3><b>CORRECT ANSWER: C </b></h3></p></div><hr>
<div class="priya">
		<p>Q.8.  Who is the latest Indian to have joined the ranks of those who have achieved the distinction of having scored a century on their debut in a test match ? </p>
		<input type="radio" name="answer8" value="a"> Azaharuddin  <br>
		<input type="radio" name="answer8" value="b"> Gavaskar <br>
		<input type="radio" name="answer8" value="c"> Sehwag <br>
		<input type="radio" name="answer8" value="d"> Tendulkar<br>
		<p>YOUR ANSWER: <?php echo $ans8; ?>
	<h3><b>CORRECT ANSWER: C </b></h3></p></div><hr>
	<div class="anand">		
		<p>Q.9. Which was the 1st non Test playing country to beat India in an international match?  </p>
		<input type="radio" name="answer9" value="a"> Sri lanka<br>
		<input type="radio" name="answer9" value="b"> Pakistan<br>
		<input type="radio" name="answer9" value="c"> Canada<br>
		<input type="radio" name="answer9" value="d"> Bangladesh<br>
		<p>YOUR ANSWER: <?php echo $ans9; ?>
	<h3><b>CORRECT ANSWER: A </b></h3></p></div><hr>
		<div class="priya">
		
		<p>Q.10. Who won the Deodhar Trophy Cricket played in Mumbai on March 9, 2010 ?  </p>
		<input type="radio" name="answer10" value="a"> North Zone <br>
		<input type="radio" name="answer10" value="b"> West Zone <br>
		<input type="radio" name="answer10" value="c"> South Zone <br>
		<input type="radio" name="answer10" value="d"> East Zone <br>
		<p>YOUR ANSWER:  <?php echo $ans10; ?>
	<h3><b>CORRECT ANSWER: A </b></h3></p></div><hr>
	<div class="anand">
	<p>Q.11. Where did india play its first one day International match? </p>
		<input type="radio" name="answer11" value="a"> Lords<br>
		<input type="radio" name="answer11" value="b"> The Oval <br>
		<input type="radio" name="answer11" value="c"> Headingley <br>
		<input type="radio" name="answer11" value="d"> Trent Bridge <br>
		<p>YOUR ANSWER:  <?php echo $ans11; ?>
	<h3><b>CORRECT ANSWER:  C</b></h3></p></div><hr>
	<div class="priya">
	<p>Q.12. The highest first wicket Partership in  Test match was between two indian's.One is V.Mankad,who is another? ?  </p>
		<input type="radio" name="answer12" value="a"> Pankaj Roy <br>
		<input type="radio" name="answer12" value="b"> Sunil Gavaskar <br>
		<input type="radio" name="answer12" value="c"> Chetan Chauhan <br>
		<input type="radio" name="answer12" value="d"> Sachin Tendulakr<br>
		<p>YOUR ANSWER:  <?php echo $ans12; ?>
	<h3><b>CORRECT ANSWER: A </b></h3></p></div><hr>
	<div class="anand">
	<p>Q.13. Who was the first captain of indian test team?  </p>
		<input type="radio" name="answer13" value="a"> Vijay Hazare<br>
		<input type="radio" name="answer13" value="b"> C.K.Nayadu <br>
		<input type="radio" name="answer13" value="c"> Lala Amarnath <br>
		<input type="radio" name="answer13" value="d"> Vinod Mankad <br>
		<p>YOUR ANSWER:  <?php echo $ans13; ?>
	<h3><b>CORRECT ANSWER: B </b></h3></p></div><hr>
	<div class="priya">
	<p>Q.14. Who was the first ODI captain of india ?  </p>
		<input type="radio" name="answer14" value="a"> Ajit Wadekar <br>
		<input type="radio" name="answer14" value="b"> Nawab pataudi <br>
		<input type="radio" name="answer14" value="c"> Lala Amarnath <br>
		<input type="radio" name="answer14" value="d"> Vijay Merchant <br>
		<p>YOUR ANSWER:  <?php echo $ans14; ?>
	<h3><b>CORRECT ANSWER: A </b></h3></p></div><hr>
	<div class="anand">
	<p>Q.15. When was the first cricket Test match played ?  </p>
		<input type="radio" name="answer15" value="a"> 1872 <br>
		<input type="radio" name="answer15" value="b"> 1879 <br>
		<input type="radio" name="answer15" value="c"> 1877 <br>
		<input type="radio" name="answer15" value="d"> 1907 <br>
		<p>YOUR ANSWER:  <?php echo $ans15; ?>
	<h3><b>CORRECT ANSWER: B </b></h3></p></div><hr>
</div>
<div class="end" text align="center">
	<h1> THANK YOU</h1>
</div>
<div class="session">
<form method="post" action="index.html">
	<tr>
		<center>
			
		<td><button align="right"> ANOTHER TOPIC</button></td></center>

</tr></form>
</div>

			<CENTER>
	<a href="http://google.com"><h6> EXIT<h6></a></h6>

</tr></form>
</div>



</body>

</head>
	</html>