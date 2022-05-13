<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

	

 ?>

 <table border="1">
 	<th>Name</th>
 	<th>Email</th>
 	<th>password</th>
 	<tr>
 		<td><?php echo $name; ?></td>
 		<td><?php echo $email; ?></td>
 		<td><?php echo $pass; ?></td>
 	</tr>
 </table>