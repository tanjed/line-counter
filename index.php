<!DOCTYPE html>
<html>
<head>
	<title>Line Counter</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
    	.border{
    		border: 1px solid black;
    	}
    	.container{
    		width: 30%;
    	}
    	.block{
    		width: 100%;
    	}
    </style>
</head>
<body>
	<?php
		function dd($value){
			die(var_dump($value));
		}
  		if(isset($_POST['submit'])){
  			if(isset($_FILES['file']['name'])) {
			
				$f = fopen($_FILES['file']['name'], "r");
				$array1 = array();

				while ( $line = fgets($f, 1000) )
				{
				    $nl = mb_strtolower($line,'UTF-8');
				    $array1[] = $nl;
				}

				dd($array1);

	  		} else {
	  			$validation = '* File is required';
	  		}
  		}
	?>
	<div class="container">
		<h2 class="text-center" style="margin: 50px;">Upload Your File Here</h2>
		<div class="row">
			<form  method="POST" style="width: 100%;" enctype="multipart/form-data" action="">
			    <div class="form-group">
			 	  <input type="text" class="form-control" name="email"> 
			      <input type="file" class="form-control-file border" name="file"> 
			      <small style="color: red"> <?php echo $validation; ?> </small>
			    </div>
			    <button type="submit" name = "submit" class="btn btn-primary block">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>
