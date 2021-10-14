<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<style type="text/css">
  .container{
    width: 50%;
    background-color: lightgray;
    padding: 20px;
    margin-top: 10px;
    border-radius: 10px;
  }

  .container input{
    width: 80%;
  }
  .container button{
    margin-left: 100px;
    width: 50%;
  }
</style>
<body>

<div class="container">
  <h2> Registration form</h2> 
  <form>
    <div class="form-group form-cehck">
      <label>First Name:</label>
      <input type="text" class="form-control" placeholder="First Name" id="fn" name="firstname">
      <br>
      

       <label>Last Name:</label>
      <input type="text" class="form-control" placeholder="Last Name" id="ln" name="lastname">
      <br>
      

       <label>Enter Your Email:</label>
      <input type="email" class="form-control" placeholder="Enter Your Email" id="emale" name="email">
      <br> 

       <label>Contact Number:</label>
      <input type="tel" class="form-control" placeholder="Contact Number" id="no" name="number">
      <br>

      <label>Date Of Birth:</label>
      <input type="date" class="form-control" placeholder="Date Of Birth" id="no" name="number">
      <br> 



      <label >Password:</label>
      <input type="password" class="form-control" id="pwd" name="password" placeholder="Password:"><br>


    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
