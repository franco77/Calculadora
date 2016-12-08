<?php

error_reporting(0); 
	


$val1     =    $_POST['numero1'];
$val2     =    $_POST['numero2'];


if (isset($val1) && isset($val2)) {

	if (isset($_POST['suma'])) {
        $resultado = $val1 + $val2;

	}

	else if (isset($_POST['resta'])) {
        $resultado = $val1 - $val2;
	}

	else if (isset($_POST['multiplica'])) {
        $resultado = $val1 * $val2;
	}

	else if (isset($_POST['divide']))   {
        $resultado = $val1 / $val2;
	}


	else if (isset($_POST['porcento']))   {
        $resultado = (($val1 * $val2) / 100);
	}
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculadora</title>
	<link rel="stylesheet" type="text/css" href="libs/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="libs/font-awesome/css/font-awesome.css">
<style type="text/css" media="screen">
input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

input[type=number] {
    -moz-appearance:textfield;
}

.panel{
	border-radius: 1px;
}

.form-control{
	border-radius: 1px;
}
.btn{
	border-radius: 1px;
}
</style>
	

</head>
<body>
<br>
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			
                
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" accept-charset="utf-8">
	
	            <div class="panel panel-default">
   				   <div class="panel-heading">
   				      <div class="row">
   				            <div class="col-md-4">
   				               <div class="form-group">
   				                   <label for="numero1"></label>
   				                   <input type="number" name="numero1" class="form-control" placeholder="Valor-1">
                               </div>
                            </div>
   				            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="numero2"></label>
   				                    <input type="number" name="numero2" class="form-control" placeholder="Valor-2">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label for="resultado"></label>
   				                   <input type="text" class="form-control" placeholder="Resultado" value="<?php echo number_format("$resultado",0,",","."); ?>" readonly>
                                </div>
                            </div>
                            
   				        </div>
   				    </div>
   				
   				        <div class="panel-body">
   				            <div class="row">
                                <div class="col-md-2">
		   				        <button type="submit" name="resta" class="btn btn-default btn-lg btn-block"><strong>-</strong></button>
		                        </div>
		                        <div class="col-md-2">
		   				        <button type="submit" name="suma" class="btn btn-primary btn-lg btn-block"><strong>+</strong></button>
		                        </div>
		                        <div class="col-md-2">
		   				        <button type="submit" name="multiplica" class="btn btn-success btn-lg btn-block"><strong>x</strong></button>
		                        </div>
		                        <div class="col-md-2">
		   				        <button type="submit" name="divide" class="btn btn-warning btn-lg btn-block"><strong>/</strong></button>
		                        </div>
		                        <div class="col-md-2">
		   				        <button type="submit" name="porcento" class="btn btn-info btn-lg btn-block"><strong>%</strong></button>
		                        </div>
		                        <div class="col-md-2">
		   				        <button type="reset" class="btn btn-danger btn-lg btn-block"><strong>Limpiar</strong></button>
	                            </div>
                            </div>
   			    	    </div>
   				</div>

   			</form>


                            

		</div>
	</div>
</div>

	
	<scrip src="libs/jquery/dist/jquery.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="libs/bootstrap/dist/js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>
