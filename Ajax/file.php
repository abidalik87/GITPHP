

<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="jquery.js"></script>
<script>
		$(document).ready(function(){
		
			$('#sub').click(function(){
					var id = $('#name').val();
				
				$.post('text.php',{e:id},function(data){
					$('#demo').html(data);
				});
			});
		});

</script>
</head>
<body>


	<input type="text" name="name" id="name">
	<input type="submit" name="submit" id="sub" value="submit">


	<ul>
		
			
		
	</ul>

	


<p id="re">Click the button several times to see if the time changes, or if the file is cached.</p>

<p id="demo"></p>



</body>
</html>