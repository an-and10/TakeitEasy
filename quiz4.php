
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
			background:linear-gradient(pink,yellow,green);
	}
		}
		h3{
			font size: 80%;
		}
		h1{
			font-size: 90%;
		}
		p{
			font-size:100%;
		}
		
		.question{
			font size: 120%;
			
			color:black;
			padding: 10px;
			height:300px;
    background: linear-gradient(to top left, #0000ff 5%, #ff99cc 101%)
		}
		.question2{
			font size: 120%;
			color:black;
			padding:10px;
			height: 300px;
    background: linear-gradient(to bottom right, #ff0000 0%, #0000ff 110%)
		}
		.message{
			font-size: 200%;
			color:red;
		}
		#example1 {
		
    background-image: url("anim10.jpg") ;
    padding: 10px;
    color:red;
    margin-right: 100px;
    margin-left: 100px;
    margin-top:50px;
    margin-bottom:10px;
    font-size: 200%;
    border-radius: 20%;

   
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

	$sql1= "SELECT CorrectAnswer FROM table9 WHERE Id like 1";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans1)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table9 WHERE Id like 2";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans2)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table9 WHERE Id like 3";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans3)
    	{
    		$count++;
    	}
    	
	}


	$sql1= "SELECT CorrectAnswer FROM table9 WHERE Id like 4";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans4)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table9 WHERE Id like 5";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans5)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table9 WHERE Id like 6";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans6)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table9 WHERE Id like 7";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans7)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table9 WHERE Id like 8";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans8)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table9 WHERE Id like 9";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans9)
    	{
    		$count++;
    	}
    	
	}

	$sql1= "SELECT CorrectAnswer FROM table9 WHERE Id like 10";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans10)
    	{
    		$count++;
    	}
    	
	}	
	$sql1= "SELECT CorrectAnswer FROM table9 WHERE Id like 11";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans11)
    	{
    		$count++;
    	}
    	
	}
	$sql1= "SELECT CorrectAnswer FROM table9 WHERE Id like 12";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans12)
    	{
    		$count++;
    	}
    	
	}
	$sql1= "SELECT CorrectAnswer FROM table9 WHERE Id like 13";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans13)
    	{
    		$count++;
    	}
    	
	}
	$sql1= "SELECT CorrectAnswer FROM table9 WHERE Id like 14";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans14)
    	{
    		$count++;
    	}
    	
	}
	$sql1= "SELECT CorrectAnswer FROM table9 WHERE Id like 15";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer']==$ans15)
    	{
    		$count++;
    	}
    	
	}


	$sql="INSERT INTO table10(count) values('$count')";
	if($conn->query($sql)=='TRUE')
	{
	echo "  ";
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
    echo "WELL PLAYED";
} elseif ($t <"10") {
    echo "well TRIED";
} 
?>

</center></h2>
<p><br>
	<h2><marquee behavior=scroll direction="right" scrollamount="30"><center> LET US GO THROUGH THE SOLUTION</center></marquee></p>
	 <br>
	 
	 <div class="question">
		<p>Q.1.  What killed Ichigo's mother in "Bleach"?<br><h1>
		<input type="radio" name="answer1" value="a">  QUINCY<br>
		<input type="radio" name="answer1" value="b">  SHINIGAMI<br>
		<input type="radio" name="answer1" value="c">  HOLLOW<br>
		<input type="radio" name="answer1" value="d">  CAR ACCIDENT<br></h1>
	<p>YOUR ANSWER: <?php echo $ans1; ?>
	<h3><b>CORRECT ANSWER: C </b></h3></p></div><hr>
		<div class="question2">
		<p>Q.2   In the seconmd episode of "Sword Art Online",what was kiriti branded as ? <br><h1>
		<input type="radio" name="answer2" value="a"> A BEATER<br>
		<input type="radio" name="answer2" value="b"> A SWORD MASTER<br>
		<input type="radio" name="answer2" value="c"> A NOOB<br>
		<input type="radio" name="answer2" value="d"> A CHEATER<br></h1>
		<p>YOUR ANSWER: <?php echo $ans2; ?>
	<h3><b>CORRECT ANSWER: A </b></h3></p></div><hr>

				<div class="question">
		<p>Q.3  What does the Shinigami Ryuk enjoying eating in "Death Note"?<br><h1>
		<input type="radio" name="answer3" value="a"> POTATO CHIPS<br>
		<input type="radio" name="answer3" value="b"> BONES<br>
		<input type="radio" name="answer3" value="c"> PIZZA<br>
		<input type="radio" name="answer3" value="d"> APPLES<br></h1>
		
		<p>YOUR ANSWER: <?php echo $ans3; ?>
	<h3><b>CORRECT ANSWER: D </b></h3></p></div><hr>
		
<div class="question2">
		<p>Q.4  In "Fullmetal Alcemist",who become the youngest state Alchemist in history at the age of 12?<br><h1>
		<input type="radio" name="answer4" value="a"> ROY MUSTANG<br>
		<input type="radio" name="answer4" value="b"> EDWARD ELRIC<br>
		<input type="radio" name="answer4" value="c"> VAN HOHENHEIM<br>
		<input type="radio" name="answer4" value="d"> ALPHONSE ELRIC<<br></h1>
		<p>YOUR ANSWER: <?php echo $ans4; ?>
	<h3><b>CORRECT ANSWER: B </b></h3></p></div><hr>
<div class="question">
		<p>Q.5  Who was the only person able to counter Sasuke's Genjutsu without using outside intervention or Genjutsu?<br><h1>
		<input type="radio" name="answer5" value="a">  ITACHI<br>
		<input type="radio" name="answer5" value="b">  KAKASHI<br>
		<input type="radio" name="answer5" value="c">  NARUTO<br>
		<input type="radio" name="answer5" value="d">  DEIDARA<br></h1>
		<p>YOUR ANSWER: <?php echo $ans5; ?>
	<h3><b>CORRECT ANSWER: D </b></h3></p></div><hr>
<div class="question2">
		<p>Q.6. What do the Survey Corps in Attack on Titian do?<br><h1>
		<input type="radio" name="answer6" value="a"> ACTIVITLY STUDY AND FIGHT THE TITANS<br>
		<input type="radio" name="answer6" value="b"> PROVIDE THE FOOD<br>
		<input type="radio" name="answer6" value="c"> TRAIN THE MILITARY<br>
		<input type="radio" name="answer6" value="d"> TEACH HUMANITY <br></h1>
		<p>YOUR ANSWER: <?php echo $ans6; ?>
	<h3><b>CORRECT ANSWER: A </b></h3></p></div><hr>
<div class="question">
		<p>Q.7. What did Light tell Ryuk before he relinquished ownership of his death note? </br><h1>
		<input type="radio" name="answer7" value="a"> "DESTROY THE NOTEBOOK" <br>
		<input type="radio" name="answer7" value="b"> "GET RID OF IT"<br>
		<input type="radio" name="answer7" value="c"> "GIVE IT TO MISA"<br>
		<input type="radio" name="answer7" value="d"> "I RELINQUISH OWERSHIP<br></h1>
		<p>YOUR ANSWER: <?php echo $ans7; ?>
	<h3><b>CORRECT ANSWER: B </b></h3></p></div><hr>

	<div class="question2">
		<p>Q.8  What is the reason why Gon took the hunter's exam? <br><h1>
		<input type="radio" name="answer8" value="a"> TO OUTDO KILLUA<br>
		<input type="radio" name="answer8" value="b"> HE LIKES TO HUNT<br>
		<input type="radio" name="answer8" value="c"> T0 FIND HIS FATHER<br>
		<input type="radio" name="answer8" value="d"> TO FIND LOVE<br></h1>
		<p>YOUR ANSWER : <?php echo $ans8; ?>
		<h3><b>CORRECT ANSWER: C </b></h3></p></DIV></p>

<div class="question2">
		<p>Q.9. What is the second ship, made by Franky, named?<br><h1>
		<input type="radio" name="answer9" value="a"> SUNFLOWER <br>
		<input type="radio" name="answer9" value="b"> BOLLION SUNNY<br>
		<input type="radio" name="answer9" value="c"> LION'S PRIDE<br>
		<input type="radio" name="answer9" value="d"> THOUSAND SUNNY<br></h1>
		<p>YOUR ANSWER: <?php echo $ans9; ?>
	<h3><b>CORRECT ANSWER: D </b></h3></p></div><hr>
		<div class="question">
		<p>Q.10  Where did Misa Amane first find Light in Death Note?</br><h1>
		<input type="radio" name="answer10" value="a"> TOKYA DOME<br>
		<input type="radio" name="answer10" value="b"> SPACELAND<br>
		<input type="radio" name="answer10" value="c"> SHIWIA<br>
		<input type="radio" name="answer10" value="d"> AYOAMA<br></h1>
		<p>YOUR ANSWER: <?php echo $ans10; ?>
	<h3><b>CORRECT ANSWER: D </b></h3></p></div><hr>
		<div class="question2">
		<p>Q.11  Which of these characters from Fairy Tail did not have Telepathy? <br><h1>
		<input type="radio" name="answer11" value="a"> EVE<br>
		<input type="radio" name="answer11" value="b"> HIBIKI<br>
		<input type="radio" name="answer11" value="c"> SIMON<br>
		<input type="radio" name="answer11" value="d"> WARREN<br></h1>
		<p>YOUR ANSWER: <?php echo $ans11; ?>
	<h3><b>CORRECT ANSWER: A </b></h3></p></div><hr>
		<div class="question">
		<p>Q.12  Where did titans come from in Attack on Titian? <br><h1>
		<input type="radio" name="answer12" value="a"> THE MILITARY<br>
		<input type="radio" name="answer12" value="b">  MYSTERY(NO ONE KNOWS)<br>
		<input type="radio" name="answer12" value="c"> EVOLUTION<br>
		<input type="radio" name="answer12" value="d"> MAD SCIENTIST<br></h1>
		<p>YOUR ANSWER: <?php echo $ans12; ?>
	<h3><b>CORRECT ANSWER: B </b></h3></p></div><hr>
		<div class="question2">
		<p>Q.13. Eren Yeager has a burning passion to kill something, but what exactly is it? <br><h1>
		<input type="radio" name="answer13" value="a"> FAIRY TAIL GUILD MEMEBERS<br>
		<input type="radio" name="answer13" value="b"> TIITANS<br>
		<input type="radio" name="answer13" value="c"> GHOULS<br>
		<input type="radio" name="answer13" value="d"> Phantoms. <br></h1>
		
		<p>YOUR ANSWER: <?php echo $ans13; ?>
	<h3><b>CORRECT ANSWER: B </b></h3></p></div><hr>
		<div class="question">
		<p>Q.14  Who was Naruto's teacher at the ninja academy? </br><h1>
		<input type="radio" name="answer14" value="a"> KAKASHI<br>
		<input type="radio" name="answer14" value="b"> IRUKA<br>
		<input type="radio" name="answer14" value="c"> SARUTOBI<br>
		<input type="radio" name="answer14" value="d"> JIRAIYA<br></h1>
		<p>YOUR ANSWER: <?php echo $ans14; ?>
	<h3><b>CORRECT ANSWER: A </b></h3></p></div><hr>
		<div class="question2">
		<p>Q.15  SWho was the first ninja to be attacked by Naruto's Rasengan-Shuriken?? <br><h1>
		<input type="radio" name="answer15" value="a"> KAKUZE<br>
		<input type="radio" name="answer15" value="b"> SASUKE<br>
		<input type="radio" name="answer15" value="c"> PEIN<br>
		<input type="radio" name="answer15" value="d"> ORACHIMARU<br></h1>
		<p>YOUR ANSWER: <?php echo $ans15; ?>
	<h3><b>CORRECT ANSWER: A </b></h3></p></div><hr>
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
</div>

			<CENTER>
	<a href="http://google.com"><h6> EXIT<h6></a></h6>

</tr></form>
</div>



</body>

</head>
	</html>