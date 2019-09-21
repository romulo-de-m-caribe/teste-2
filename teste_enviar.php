<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	
</head>
<body>
<h2>Melhorando o GETHUB - Teste 2</h2>
	<form method="post" action="" id="ajax_form">
	 
		
		<label>Email: <input id="email" type="text" name="email" value="" /></label>
		<label>password: <input type="password" id="password" name="password" value="" /></label>

		<label><input type="submit" name="enviar" value="Enviar" /></label>
	</form>
    
    
    
   <div id="teste"></div>
    
</body>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#ajax_form').submit(function(){
			var dados = jQuery( this ).serialize();

			jQuery.ajax({
				type: "POST",
				url: "p2.php",
				
				data: dados,
				success: function( data )
				{
				 
//alert(data);


    var myString = data;
    var myArray = myString.split('-');
    for(var i=0;i<myArray.length;i++){
        $('#teste').append("<div>"+myArray[i]+" Melhorando</div>");
    }
 
				}
			});
			
			return false;
		});
	});
	</script>
</html>