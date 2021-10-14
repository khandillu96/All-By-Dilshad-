<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>basic layout</title>
	<style type="text/css">
		body{
			margin: 0px;
			padding: 0px;
		}



		#header{
			background-color: #6495ED;
			height: 50px;
			padding: 1px;
			box-sizing: border-box;
		}

		#header p{
			padding-left: 10px ;
			text-shadow: 5px 5px 10px white;
			text-transform: capitalize;
		}


		#menu{
			background-color: #2F4F4F;
		}

		#menu ul{
			padding: 0px;
			margin: 0px;
			list-style-type: none;
		}

		#menu ul li{
			display: inline-block;	
			border-right: 1px solid white;
			text-transform: capitalize;
		}

		#menu ul li a{
			display: block;
			padding: 10px;
			width: 100px;
			text-decoration: none;
			color: white;
			text-align: center;

		}


		#menu ul li a:hover{

			background-color: black;
		}


		#content{
			background-color: white;
			float: left;
			width: 80%;
            height: 450px;
            padding: 10px;
            box-sizing: border-box;

		}

		#content h1{
			     text-transform: capitalize;
			     text-decoration: underline;
		}

		#sidebar{
			background-color: #808080;
			float: right;
			width: 20%;
			height: 450px;
		}

		#sidebar ul{
			padding: 0px;
			margin: 0px;
			list-style-type: none;
		}

		#sidebar ul li a{
			padding: 20px;
			display: block;
			text-transform: capitalize;
			border-bottom: 1px solid white;
			text-align: center;
			text-decoration: none;
			color: white;
		}

		#footer{
			background-color:#CD5C5C ;
			clear: both;
			height: 30px;
			line-height: 30px;
			text-align: right;

		}

		#footer p{
			padding-right: 5px;
			text-decoration: underline;
		}


	</style>


</head>
<body>

	
<div id="website">
	<div id="header" >
	 <p>DILSAHD KHAN</p>
	  </div>
	<div id="menu">
		
		<ul>
			<li><a href="home.php">home</a></li>
			<li><a href="aboutus.php">about us</a></li>
            <li><a href="contact.php">contact</a></li>
			<li><a href="gallery.php">gellery</a></li>
		</ul>

	</div>
	
  