<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="jquery.js"></script>
<script>
		$(document).ready(function(){
		
			$('#sub').click(function(){
					var e = $('#name').val();
				
				$.get('text.php',{email:e},function(data){
					$('#demo').html(data);
				});
			});
		});

</script>
</head>
<body>


	<input type="text" name="name" id="name">
	<input type="submit" name="submit" id="sub" value="submit">


	


<p id="re">Click the button several times to see if the time changes, or if the file is cached.</p>

<p id="demo"></p>



</body>
</html>