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

		<script>
				function validateForm() {
					var id      = document.forms['Form1']['nid'].value,
			       
				
					pw     = document.forms['Form1']['password'].value;
					
				
				if (id ==null || pw==null || id =="" || pw=="") {
					alert("Please enter information correctly!!");
					return false;
				}
				
					else
						
						{return true;}
				}
		
	    </script>

		<div class="container">
		<div class="row" >
			
				
					<div class="col-md-4">
					</div>
					<div class="col-md-4" >
		
				
		<div class="regForm"  > 
        <h1> Member Login</h1>
        <form  action="insertdata3.php" method="post" name="Form1"  onsubmit="return validateForm();">
          <div class="form-group ">
            <label >NID</label>
            <input type="text" class="form-control"  placeholder="Enter NID"  name="nid" >
          
          </div>

          <div class="form-group ">
            <label>Password</label>
            <input type="password" class="form-control"  placeholder="Enter Password" name="password">
            
          </div>

          <button class="btn btn-primary">LogIn</button>
		  </form>
          <p>Don't have an account? <a href="registraion1.php">Create an account</a></p>
       
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