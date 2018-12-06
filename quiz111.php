<html>
<head>
		<style>
	

		}
		.end
		{
			font size: 250%;
			font color: green;
		}
		h6{
			color:red;
			font-size:80%;
		}
		
		body{
			background-color:orange; background-size: 100%;
	}
		}
		h3{
			font size: 130%;
		}
		
		.question{
			font size: 140%;
			
			color:black;
			padding: 10px;
			height:300px;
    background: linear-gradient(to bottom right, #66ff66 0%, #ff0000 100%)
		}
		.question2{
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
		
    background-color:rebeccapurple; ;
    padding: 10px;
    color: black;
    margin-right: 100px;
    margin-left: 100px;
    margin-top:20px;
    border-radius: 40px;
   
}
	</style>
	<body>
	<div id="example1">
		<br>
		<br>
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

	$sql1= "SELECT CorrectAnswer FROM table5 WHERE Id like 1";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans1)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table5 WHERE Id like 2";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans2)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table5 WHERE Id like 3";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans3)
    	{
    		$count++;
    	}
    	
	}


	$sql1= "SELECT CorrectAnswer FROM table5 WHERE Id like 4";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans4)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table5 WHERE Id like 5";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans5)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table5 WHERE Id like 6";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans6)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table5 WHERE Id like 7";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans7)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table5 WHERE Id like 8";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans8)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table5 WHERE Id like 9";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans9)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table5 WHERE Id like 10";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans10)
    	{
    		$count++;
    	}
    	
	}	
	$sql1= "SELECT CorrectAnswer FROM table5 WHERE Id like 11";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans11)
    	{
    		$count++;
    	}
    	
	}
	$sql1= "SELECT CorrectAnswer FROM table5 WHERE Id like 12";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans12)
    	{
    		$count++;
    	}
    	
	}
	$sql1= "SELECT CorrectAnswer FROM table5 WHERE Id like 13";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans13)
    	{
    		$count++;
    	}
    	
	}
	$sql1= "SELECT CorrectAnswer FROM table5 WHERE Id like 14";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans14)
    	{
    		$count++;
    	}
    	
	}
	$sql1= "SELECT CorrectAnswer FROM table5 WHERE Id like 15";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans15)
    	{
    		$count++;
    	}
    	
	}


	$sql="INSERT INTO table6(count) values('$count')";
	if($conn->query($sql)=='TRUE')
	{
	
	}
?>
<h1>
	<br>
	<br><center><?php
	echo $count; 
	?> OUT OF 15 </center>
</h1>
</div>
<h2>
	<center><br>
		<br>
	<?php
$t = date("count");
if ($t > "10") {
    echo "WELL PLAYED,TRY SOME OTHER FIELD";
} elseif ($t <"10") {
    echo "well Treied";
} 
?>

</center></h2>
<p>
	<h2><marquee behavior=scroll direction="right" scrollamount="30"><center> LET US GO THROUGH THE SOLUTION</center></marquee></p>
	 <br>
	 <br>
	 <div class="question">
		<p>Q.1. "Some believe that before the universe, there was nothing. They're wrong. There was darkness... and it has survived." Who said this?<br>
		<input type="radio" name="answer1" value="a"> ODIN<br>
		<input type="radio" name="answer1" value="b"> LOKI<br>
		<input type="radio" name="answer1" value="c"> MALEKITH<br>
		<input type="radio" name="answer1" value="d"> OTHERS<br>
	<p>YOUR ANSWER: <?php echo $ans1; ?>
	<h3><b>CORRECT ANSWER: A </b></h3></p></div><hr>
		<div class="question2">
		<p>Q.2. What did Agent Coulson Collect in "THE AVENGERS" ?<br>
		<input type="radio" name="answer2" value="a"> TOYS<br>
		<input type="radio" name="answer2" value="b"> COMICS<br>
		<input type="radio" name="answer2" value="c"> TRADING CARDS<br>
		<input type="radio" name="answer2" value="d"> STATUES<br>
		<p>YOUR ANSWER: <?php echo $ans2; ?>
	<h3><b>CORRECT ANSWER: C </b></h3></p></div><hr>

				<div class="question">
		<p>Q.3. At the end of "Spider-Man: Homecoming",who finds out that Peter is Spinder-Man <br>
		<input type="radio" name="answer3" value="a"> FLASH THOMPSON<br>
		<input type="radio" name="answer3" value="b"> MICHELLE JONES<br>
		<input type="radio" name="answer3" value="c"> LIZ ALLEN<br>
		<input type="radio" name="answer3" value="d"> AUNT MAY<br>
		<p>YOUR ANSWER: <?php echo $ans3; ?>
	<h3><b>CORRECT ANSWER: D </b></h3></p></div><hr>
		
<div class="question2">
		<p>Q.4. In which of these films did the character of Nick fury have the most screen time?<br>
		<input type="radio" name="answer4" value="a"> IRON MAN<br>
		<input type="radio" name="answer4" value="b"> THOR: THE DARK WORLD<br>
		<input type="radio" name="answer4" value="c"> WINTER SOLDIER<br>
		<input type="radio" name="answer4" value="d"> THE INCREDIBLE HULK<br>
		<p>YOUR ANSWER: <?php echo $ans4; ?>
	<h3><b>CORRECT ANSWER: C </b></h3></p></div><hr>
<div class="question">
		<p>Q.5. Where is the HYDRA base that is attacked at the beginning of "AVENGERRS:Age of Ultron"?<br>
		<input type="radio" name="answer5" value="a"> WAKANDA<br>
		<input type="radio" name="answer5" value="b"> SOKOVIA<br>
		<input type="radio" name="answer5" value="c"> SEOUL<br>
		<input type="radio" name="answer5" value="d"> MADRIPOOR<br>
		<p>YOUR ANSWER: <?php echo $ans5; ?>
	<h3><b>CORRECT ANSWER: B </b></h3></p></div><hr>
<div class="question2">
		<p>Q.6. Pepper Potts get a promtion in "Iron man 2".what's her new gig?</br>
		<input type="radio" name="answer6" value="a"> CEO OF STARK INDUSTRIES<br>
		<input type="radio" name="answer6" value="b"> LEVEL 16 S.H.E.L.D<br>
		<input type="radio" name="answer6" value="c"> CDO OF STARK INDUSTRIES<br>
		<input type="radio" name="answer6" value="d"> MRS.TONY STARK<br>
		<p>YOUR ANSWER: <?php echo $ans6; ?>
	<h3><b>CORRECT ANSWER: A </b></h3></p></div><hr>
<div class="question">
		<p>Q.7. What were Alexender Pierce's last words in "THE WINTER SOLDIER" ?<br>
		<input type="radio" name="answer7" value="a"> GODDAMN <br>
		<input type="radio" name="answer7" value="b"> SCREW YOU,NICK <br>
		<input type="radio" name="answer7" value="c"> NO. <br>
		<input type="radio" name="answer7" value="d"> HAIL HYDRA<br>
		<p>YOUR ANSWER: <?php echo $ans7; ?>
	<h3><b>CORRECT ANSWER: D </b></h3></p></div><hr>
<div class="question2">
		<p>Q.8.  In Guardians of galaxy vol-2",what does Rocket steal from the sovereign? <br>
		<input type="radio" name="answer8" value="a"> CREDITS<br>
		<input type="radio" name="answer8" value="b"> BATTERIES<br>
		<input type="radio" name="answer8" value="c"> FABREGE EGG<br>
		<input type="radio" name="answer8" value="d"> DARK ETHER<br>
		<p>YOUR ANSWER: <?php echo $ans8; ?>
	<h3><b>CORRECT ANSWER: B </b></h3></p></div><hr>
<div class="question">
		<p>Q.9. What is the name of Hank Pym’s daughter, played by Evangeline Lilly, in Ant-Man? <br>
		<input type="radio" name="answer9" value="a"> HOPE CROSS<br>
		<input type="radio" name="answer9" value="b"> HOPE VAN DYNE<br>
		<input type="radio" name="answer9" value="c"> HOPE VAN PYM<br>
		<input type="radio" name="answer9" value="d"> HOPE LANG<br>
		<p>YOUR ANSWER: <?php echo $ans9; ?>
	<h3><b>CORRECT ANSWER: B </b></h3></p></div><hr>
		<div class="question2">
		<p>Q.10.Tony Stark does NOT use which of these when describing himself?<br>
		<input type="radio" name="answer10" value="a"> PHILANTHROPIST<br>
		<input type="radio" name="answer10" value="b"> PLAYBOY<br>
		<input type="radio" name="answer10" value="c"> WANDERER<br>
		<input type="radio" name="answer10" value="d"> GENIUS <br>
		<p>YOUR ANSWER: <?php echo $ans10; ?>
	<h3><b>CORRECT ANSWER: C </b></h3></p></div><hr>
		<div class="question">
		<p>Q.11.James Rhodes, Tony Stark’s best friend, is known as what when he puts on his suit? <br>
		<input type="radio" name="answer11" value="a"> WAR MACHINE<br>
		<input type="radio" name="answer11" value="b"> BULLETSTORM<br>
		<input type="radio" name="answer11" value="c"> HULK BUSTER<br>
		<input type="radio" name="answer11" value="d"> MARK 3 <br>
		<p>YOUR ANSWER: <?php echo $ans11; ?>
	<h3><b>CORRECT ANSWER: A </b></h3></p></div><hr>
		<div class="question2">
		<p>Q.12.What is the name of the fictional reclusive African republic that T’challa, a.k.a Black Panther, hails from? <br>
		<input type="radio" name="answer12" value="a"> WAKANDA<br>
		<input type="radio" name="answer12" value="b"> AGGAMETTO<br>
		<input type="radio" name="answer12" value="c"> TERRA<br>
		<input type="radio" name="answer12" value="d"> SOKOVIA<br>
		<p>YOUR ANSWER: <?php echo $ans12; ?>
	<h3><b>CORRECT ANSWER: A </b></h3></p></div><hr>
		<div class="question">
		<p>Q.13.Dr. Stephen Strange protects the New York Sanctum. Where are the other sanctums located? ?  <br>
		<input type="radio" name="answer13" value="a"> LONDON & PARIS<br>
		<input type="radio" name="answer13" value="b"> LONDON & BEJING<br>
		<input type="radio" name="answer13" value="c"> TOKYU & PARIS<br>
		<input type="radio" name="answer13" value="d"> LONDON & HONG KONG <br>
		<p>YOUR ANSWER: <?php echo $ans13; ?>
	<h3><b>CORRECT ANSWER: D </b></h3></p></div><hr>
		<div class="question2">
		<p>Q.14.Which Infinity Stone does Vision have embedded into his forehead? ?  </br>
		<input type="radio" name="answer14" value="a"> THE SOUL STONE<br>
		<input type="radio" name="answer14" value="b"> THE MIND STOME<br>
		<input type="radio" name="answer14" value="c"> THE TIME STONE<br>
		<input type="radio" name="answer14" value="d"> THE SPACE STONE <br>
		<p>YOUR ANSWER: <?php echo $ans14; ?>
	<h3><b>CORRECT ANSWER: B </b></h3></p></div><hr>
		<div class="question">
		<p>Q.15.What is Peter Quill a.k.a Star Lord’s ship called in Guardians of the Galaxy? <br>
		<input type="radio" name="answer15" value="a"> THE NOVA<br>
		<input type="radio" name="answer15" value="b"> THE KLYN<br>
		<input type="radio" name="answer15" value="c"> THE MILANO<br>
		<input type="radio" name="answer15" value="d"> THE KNOWHERE<br>
		<p>YOUR ANSWER: <?php echo $ans15; ?>
	<h3><b>CORRECT ANSWER: C </b></h3></p></div><hr>
	</div>
<div class="end" text align="center">
	<h1> THANK YOU</h1>
</div>
</p>
</div>
</p></div>
<div class="session">
<form method="post" action="index.html">
	<tr>
		<center>
			
		<td><button align="right" href=""> ANOTHER TOPIC</button></td></center>

</tr></form>
</div>
			<CENTER>
	<a href="http://www.google.com"><h6> EXIT</h6></a>


</head>
	</html>