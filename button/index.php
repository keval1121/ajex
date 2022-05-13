<form>
	<table>
		<tr>
			<td>
				<input type="button" class ="add" value="+">
			</td>
			<td>
				<h1 id="dis">0<input  type="text" id="data_dis" value="0" readonly hidden ></h1>
			</td>
			<td>
				<input type="button"  class ="add" value="-">
			</td>
		</tr>
	</table>
</form>


<script type="text/javascript" src="../first/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript">

	$(document).ready(function(){

		$('.add').click(function(){

				var data = $(this).val();
				var data1 = $('#data_dis').val();

				$.ajax({
					type:'GET',
					url:'tic.php',
					data:{'data':data,'val':data1},

					success:function(res)
					{
						$('#dis').html(res);
					}

				})

		})

	})

</script>
