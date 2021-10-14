<!DOCTYPE html>

<?php include '4.1-php.php';?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
<div id="form">
	<h1>registration form</h1>
<form method="POST" action="4.1-php.php" enctype="multipart/form-data">
	<div id="form1">
		<label>first name : </label>
		<input type="text" <?php echo $fname;?>  name="fn" id="fn"  placeholder=" Eenter your first name"><br>
		<span id="fns" style="color :red;"><?php echo $fnameErr; ?></span><br><br>

		<label>last name : </label>
		<input type="text" id="ln" name="ln" placeholder="enter your last name"><br>
		<span id="lns" style="color: red"><?php echo $lnameErr; ?></span><br><br>

        <label>company name: </label>
		<input type="text" name="cn" placeholder=" enter your company name" id="cn"><br>
		<span id="cns" style="color :red;"><?php echo $cnameErr; ?></span><br><br>


		 <label>email: </label>
		<input type="email" name="email"  placeholder="enter your mail id" id="email"><br>
		<span id="cns" style="color :red;"><?php echo $emailErr; ?></span><br><br>

		<label>phone:</label>
		<select id="select"  name="phone">

			<option selected="selected" value="choose">--choose code</option>
			<option value="india">+91 India</option>
			<option value="pakistan">+91 pakistan</option>
			<option value="dubai">+91 dubai</option>
			<option value="saudi">+91 saudi</option>

		</select>
			<input type="text" id="phone" placeholder=" enter your contact no" name="contactno"><br>
		<span id="pns" style="color:red;"><?php echo $codeErr." ".$contactErr; ?></span><br><br>

		<label>states:</label>
		<select id="selectstates"  name="states">
			<option selected="selected" value="chooseS">--choose state</option>
			<option>maharashtra</option>
			<option>utter pradesh</option>
			<option>bihar</option>
			<option>gujrat</option>
		</select><br>
		<span id="ss" style="color:red;"><?php echo $statesErr; ?></span><br><br>


		<label>hobby:</label>
		<label class="hobby">
		<input type="checkbox" id="checkbox" name="hobby" value="cricket">cricket
		</label>
		<label class="hobby">
		<input type="checkbox" id="checkbox" name="hobby" value="batminton">batminon</label>

		<label class="hobby">
		<input type="checkbox" id="checkbox" name="hobby" value="football">football</label>
		<br>
        <span id="hs" style="color:red;"><?php echo $hobbyErr; ?></span><br><br>


        <label>select gender:</label>
        <label class="gender">
        <input type="radio" id="radio"  value="male" name="gender"  >male
        </label>

        <label class="gender">
        <input type="radio" id="radio" name="gender"   value="femail">female
        </label>

        <label class="gender">
        <input type="radio" id="radio" name="gender" value="other">other
      </label><br>
         <span id="gs" style="color:red;"><?php echo $genderErr; ?></span><br><br>


         <label>username</label>
        <input type="text" name="username" placeholder=" Enter Username Name" id="cn"  ><br>
        <span style="color:red;" ><?php echo $usernameErr; ?></span><br><br>

         <label>password</label>
        <input type="password" name="pw1" placeholder=" Enter password Name" id="cn"><br>
        <span style="color:red;" ><?php echo $pw1Err; ?></span><br><br>

         <label>Re-enter password</label>
        <input type="password" name="pw2" placeholder="Re-enter password Name" id="cn"><br>
        <span style="color:red;" ><?php echo $pw2Err; ?></span><br><br>

         <label>enter notes</label>
         <textarea placeholder="enter messege" id="text" rows="1" cols="20;"></textarea><br>
          <span id="tas"></span><br>

         <label>attached file</label>
         <input type="file" id="file" name="file" ><br>
         <span id="afs"style="color:red;" ><?php echo $fileErr; ?></span><br><br>

        <input type="submit" id="submit" name="submit" value="Submit">
	</div>
</form>	
</div>
</body>
</html>