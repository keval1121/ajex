
<form method="POST" id="form_data">
	<table>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>password:</td>
			<td><input type="password" name="password" ></td>
		</tr>
		<tr>
			<td><input type="submit" name="save"></td>
		</tr>
	</table>
</form>

<div id="dis">


	
</div>


<script type="text/javascript" src="../first/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
	
	$(document).ready(function(){

		$('#form_data').submit(function(e){
			e.preventDefault();

			var formdata = $('#form_data').serialize();

			$.ajax({

				type :'POST',
				url  :'abc.php' ,
				data :formdata,


					success:function(res)
					{
						$('#dis').html(res);
					}


			})
		})

		   
   })  	

</script>


	