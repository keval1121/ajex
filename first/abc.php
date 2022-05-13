<?php 

       $con = mysqli_connect('localhost','root','','demo1');


if(isset($_POST['name']))
{

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql_insert = "insert into user1 (name,email,password) values ('$name','$email','$password')";
mysqli_query($con,$sql_insert);
}

if (isset($_POST['id'])) 
{
    $id = $_POST['id'];

   
    $sql_delete = "delete from user1 where id = '$id'";
    mysqli_query($con,$sql_delete);
}

    $select_data = "select * from user1";
    $data = mysqli_query($con,$select_data);
 ?>

  <table border="1">
     <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>password</th>
    <th>Action</th>

    <?php while ($row = mysqli_fetch_assoc($data)) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><a href="javascript:void(0)" class="delete" user-data="<?php echo $row['id']; ?>" >Delete</a><td>
        
    </tr>
 <?php } ?>
 </table>





