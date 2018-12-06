
<html>
<head>
<live score>
</



<div id="displayScore"></div>
<script type="text/javascript">
function getReply(data) {
         document.getElementById("displayScore").innerHTML="";
         document.getElementById("displayScore").innerHTML+=data.match+"<br/>";
         document.getElementById("displayScore").innerHTML+=data.score+"<br/>";
         document.getElementById("displayScore").innerHTML+=data.summary+"<br/>";    
         document.getElementById("displayScore").innerHTML+="Dt: "+data.date+"<br/>";    
}
</script>
 
 <script type="text/javascript" src="http://json-cricket.appspot.com/score.json?callback=getReply"></script>
 