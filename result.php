<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
   
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


   
</head>
<body>

		

		<div class="container">
		<div class="row" >
			
				
					<div class="col-md-4">
					</div>
					<div class="col-md-4" >
		
		
			<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "voting";

	
		$conn = mysqli_connect($servername, $username, $password, $dbname);
	
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$sq = "SELECT * FROM vote";

				mysqli_query($conn,$sq);

				$result1 = $conn->query($sq);
			

				 while($row = $result1->fetch_assoc())
				 {
					  echo"<br>". $row["candidate"]."&nbsp;&nbsp;&nbsp;".$row["symbol"]."&nbsp;&nbsp;&nbsp;".$row["vote_count"];
					  echo"<br>";
					  echo"<br>";
				 }
			?>
			<form  action="homepage.php" method="post" >
         <button class="btn btn-primary">Back To Homepage</button>
</form>
			
	</div>
</div>
</div>


	
    



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });
        });
    </script>
</body>
</html>