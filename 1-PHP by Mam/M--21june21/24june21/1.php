 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="1.css">
</head>
<body>
<div id="form">
	<h1>registration form</h1>
<form>
	<div id="form1">
		<label>first name : </label>
		<input type="text"  name="fn" id="fn"  placeholder=" Eenter your first name"><br>
		<span id="fns"></span><br><br>

		<label>last name : </label>
		<input type="text" id="ln" name="ln" placeholder="enter your last name"><br>
		<span id="lns"></span><br><br>

        <label>company name: </label>
		<input type="text" name="ln" placeholder=" enter your company name" id="cn"><br>
		<span id="cns"></span><br><br>

		 <label>email: </label>
		<input type="email" name="email"  placeholder="enter your mail id" id="email"><br>
		<span id="es"></span><br><br>

		<label>phone:</label>
		<select name="phone" id="select">
			<option disabled="disabled"  selected="selected">--choose code</option>
			<option value="india">+91 India</option>
			<option value="pakistan">+91 pakistan</option>
			<option value="dubai">+91 dubai</option>
			<option value="saudi">+91 saudi</option>
			<input type="tel" id="phone" placeholder=" enter your contact no" name="contactno">
		</select><br>
		<span id="pns"></span><br><br>

		<label>states:</label>
		<select name="states" id="selectstates">
			<option disabled="disabled " selected="selected">--choose state</option>
			<option>maharashtra</option>
			<option>utter pradesh</option>
			<option>bihar</option>
			<option>gujrat</option>
		</select><br>
		<span id="ss"></span><br><br>


		<label>hobby:</label>
		<label class="hobby">
		<input type="checkbox" id="checkbox" name="hobby" value="cricket">cricket
		</label>
		<label class="hobby">
		<input type="checkbox" id="checkbox" name="hobby" value="batminton">batminon</label>

		<label class="hobby">
		<input type="checkbox" id="checkbox" name="hobby" value="football">football</label>
		<br>
        <span id="hs"></span><br><br>


        <label>select gender:</label>
        <label class="gender">
        <input type="radio" id="radio" name="gender" value="male">male
        </label>

        <label class="gender">
        <input type="radio" id="radio" name="gender" value="femail">female
        </label>

        <label class="gender">
        <input type="radio" id="radio" name="gender" value="other">other
      </label><br>
         <span id="gs"></span><br><br>

         <label>enter notes</label>
         <textarea placeholder="enter messege" id="text" rows="1" cols="20;"></textarea><br>
          <span id="tas"></span><br>

         <label>attached file</label>
         <input type="file" id="file" name="resume" ><br>
         <span id="afs"></span><br><br>
         <input type="submit" name="submit" class="one" value="submit">
	</div>
</form>	
</div>

<?php 






?>

</script>
</body>
</html>