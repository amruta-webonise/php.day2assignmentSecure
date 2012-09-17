<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</head>
<body>
	Enter your name <input id="name" type="text">
	<input id="submit" type="submit">
<script type="text/javascript">
		$('#submit').click(function(event){
			event.preventDefault();
			str = $('#name').val();
			$.ajax({
				type: 'GET',
				url: 'xxsAttackSer.php',
				 data: {name : str},
			}).done(function(response){
				$('#result').html(response);
			});
		});
	</script>
<!<script alert('You have been attacked')</script>
<div id="result">
</div>
</body>
</html>
