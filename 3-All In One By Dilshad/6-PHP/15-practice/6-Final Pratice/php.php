<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
       $a=$b=$add="";
     if(isset($_POST['submit'])){
       $a=$_POST['A'];
       $b=$_POST['B'];
       $add=$a+$b;
      
     }
    
    ?>
<div class="container jumbotron">
    <form action="#" method="post">
        <div class="row">
            
        <div class="form-group col-sm-6 ">
        <label>Enter A</label>
        <input type="text" name="A" id="A" value="<?php echo $a;?>"class="form-control">
        </div>

        <div class="form-group col-sm-6 ">
            <label>Enter B</label>
            <input type="text" name="B"value="<?php echo $b;?>" id="B" class="form-control">
            </div>   
        </div> 
        

        <div class="form-group">
            <label>Result</label>
            <input type="text" value="<?php echo $add;?>" name="Result" id="Result" class="form-control">
            </div>   
    
    <input type="submit" class="btn btn-primary btn-block" value="submit" name="submit" onclick="abc()">
    </form>
</div>    
</body>
</html>