<!DOCTYPE html>
<html>
    <head>

        <title>Online Election</title>
         
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/login.css" type="text/css">
            
    </head>
    <body>
         <div class="head">
    
       <div class="container-fluid">
		<div class="navbar-header">
                   <b> Online Election System </b>
		</div>
		
	</div>
    
</div>
             
           <div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form name="login" method="POST" action="VLogin.php">
			<fieldset>
				<h2>Please Login In</h2>
				<hr class="colorgraph">
                                 
				<div class="form-group">
                    <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Enter your user name" required type="text">
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Enter your password" required type="password">
				</div>
			   
				<hr class="colorgraph">
				<div class="row">
			
					<div class="col-xs-6 col-sm-6 col-md-6">
						<button name="submit" type="submit"class="btn btn-lg btn-primary btn-block">Login </button>
					</div>
				</div>
			
			</fieldset>
		</form>
	</div>
</div>
<br>
<br>
<h2>Don't have an account ???  <a href="VoterRegister.php"> Sign Up </a> </h2>
<br>
<br>

					
 
    </body>
</html>
