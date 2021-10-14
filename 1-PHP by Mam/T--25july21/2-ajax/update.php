
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
      $("#submit").click(function(){
        

      
      var username=document.getElementById('username').value;
      var password=document.getElementById('password').value;
      var from="update-info";


  $.ajax
  ({
   url: 'information.php',
    method:"POST",
data:{username:username,password:password,from:from},
   success: function(data)
   {
   //$("#result").html(data);
alert("successfully updated");
        //window.location.href = "view.php";
   }
  
  });

      });
      });
  </script>
</head>
<body>
    <div class="container">
<div class="col-lg-6 m-auto ">
	<form method="post" class="mt-3">
		
    <div class="card">
    	<div class="card-header bg-dark">
    		<h1 class="text-white text-center"> insert operation</h1>
    	</div><br>

    	<label>Username</label>
    	<input type="text" name="username" placeholder="Enter your Username" id="username"  class="form-control"><br>

    	<label>Password</label>
    	<input type="text" name="password" placeholder="Enter your Password" id="password" class="form-control"><br>

    	<button type="button" id="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
    </div>

	</form>
</div>
</div>
</body>
</html>