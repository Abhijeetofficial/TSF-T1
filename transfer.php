<?php
session_start();
$con=mysqli_connect('localhost','root','','basic_banking');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button1.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: rgb(60,120,159);
		background-image:url("Assets/2.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:#00f0ff;
		padding:80px;
		border:2px ridge green;
	}
	.ho{
		padding-top:80px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background-color:#bebebe;
	}
	.button:hover{
		background-color:#30abf0;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Abhijeet"){
				 var arr=["Priti","Anupam","Ashutosh","Amit","Sukriti","Priyanshu","Jitendra","Prabhakar","Deepak"];
				 }
				 else if(a==="Priti"){
					var arr=["Abhijeet","Anupam","Ashutosh","Amit","Sukriti","Priyanshu","Jitendra","Prabhakar","Deepak"];
				}
				else if(a==="Anupam"){
					var arr=["Abhijeet","Priti","Ashutosh","Amit","Sukriti","Priyanshu","Jitendra","Prabhakar","Deepak"];
				}
				else if(a==="Ashutosh"){
					var arr=["Abhijeet","Priti","Anupam","Amit","Sukriti","Priyanshu","Jitendra","Prabhakar","Deepak"];
				 }
				 else if(a==="Amit"){
					var arr=["Abhijeet","Priti","Anupam","Ashutosh","Sukriti","Priyanshu","Jitendra","Prabhakar","Deepak"];
				 }
				 else if(a==="Sukriti"){
                                         var arr=["Abhijeet","Priti","Anupam","Ashutosh","Amit","Priyanshu","Jitendra","Prabhakar","Deepak"];
				 }
				 else if(a==="Priyanshu"){
					var arr=["Abhijeet","Priti","Anupam","Ashutosh","Amit","Sukriti","Jitendra","Prabhakar","Deepak"];
				 }
				 else if(a==="Jitendra"){
					var arr=["Abhijeet","Priti","Anupam","Ashutosh","Amit","Sukriti","Priyanshu","Prabhakar","Deepak"];
				 }
				 else if(a==="Prabhakar"){
					var arr=["Abhijeet","Priti","Anupam","Ashutosh","Amit","Sukriti","Priyanshu","Jitendra","Deepak"];
				 }
				 else if(a==="Shubham"){
				        var arr=["Abhijeet","Priti","Anupam","Ashutosh","Amit","Sukriti","Priyanshu","Jitendra","Prabhakar"];
			
	 }



                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:#0000ff;text-shadow: 1.5px 1.5px black;">Transfer Credits</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Abhijeet">Abhijeet</option>
			<option value="Priti">Priti</option>
			<option value="Anupam">Anupam</option>
			<option value="Ashutosh">Ashutosh</option>
			<option value="Amit">Amit</option>
			<option value="Sukriti">Sukriti</option>
			<option value="Priyanshu">Priyanshu</option>
			<option value="Jitendra">Jitendra</option>
			<option value="Prabhakar">Prabhakar</option>
			<option value="Deepak">Deepak</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="sender_name" align="left">Credits: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle"><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="btn-hover color-1">HOME</button>
	</a>
</div>
</body>
</html>