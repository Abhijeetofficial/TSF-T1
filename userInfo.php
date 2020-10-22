<?php 
session_start();
$con=mysqli_connect('localhost','root','','basic_banking');

$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>viewUser</title>
   <link rel="stylesheet" href="button1.css">
   
	<style>
		body{
			text-align:center;
		}
		.flat-table-1 {
			background: #00f0ff;
		}
		.flat-table-1 tr:hover {
			background: rgba(0,0,0,0.19);
		}
		h1{
			font-family: Arial, Times, serif;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			}
		th{
			color:black;
			font-size:24px;
			padding:16px;
		}
		
		td{
			text-align:center;
			font-size:22px;
			color: #070707;
			padding: 0px 20px 0px 20px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
			text-shadow: 0px 0px black;
		}
		.css-button{
			margin-left:auto;
			margin-right:auto;
		}
		.button1{
			background-color:green;
			text-align:center;
			padding-top:2px;
		}
		
		.button1:hover{
			background-color:red;
		}
		.view{
			top:50%;
			padding-top:20px;
			text-align:center;
		}
		.ho{
			padding-top:50px;
			padding-bottom:100px;
		}
		body{
		background-image:url("Assets/2.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
	
</head>
	
<body>
	<h1 style="color:#000fff;text-shadow: 2px 2px black;">User Details</h1>
    <table class="flat-table-1">
		<thead>
			<th>S.NO</th>
			<th>Name</th>
			<th>Email</th>
			<th>Current Balance</th>
			<th></th>
		</thead>
		<tbody>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["credits"]; ?></td>
			<td>
				<form action="user.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="Abhijeet">View</button>
				</form>
			</td>
		</tr>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 2</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["credits"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Priti">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 3</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["credits"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Anupam">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 4</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["credits"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Ashutosh">View</button>
				</form>
			</td>
   

        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 5</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["credits"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Amit">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 6</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["credits"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Sukriti">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
     
				$row=mysqli_fetch_array($result);
			?>
			<td> 7</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["credits"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Priyanshu">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php   
				$row=mysqli_fetch_array($result);
			?>
			<td> 8</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["credits"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Jitendra">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 9</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["credits"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Prabhakar">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 10</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["credits"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Deepak">View</button>
				</form>
			</td>
		</tr>
		</tbody>
	</table><br><br>

<div class="buttons">
	<a href="index.php">
    <button class="btn-hover color-1">HOME</button>
	</a>
</div>
</body>
</html>
