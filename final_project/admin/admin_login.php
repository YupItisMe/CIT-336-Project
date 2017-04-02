<?php include '../view/header.php'; 
?>


<!DOCTYPE html>
<main>

    <h2>Author Portal</h2>
    <p>Login so that you can add and view reviews!.</p>
	<form action="index.php" method="post" id="admin_login_form">
        <input type="hidden" name="action" value="admin_login">
     
	<select name='email' method="post">
				<?php foreach($admins as $admin)  :  ?>
				<option value="<?php echo $admin['emailAddress']; ?>">
					<?php echo $admin['firstName'];?><?php echo ' ';?><?php echo $admin[ 'lastName']; ?></option>
			    <?php endforeach; ?>
			</select>

       
    <td><form action="index.php" method="post">           
                    <input type="submit" value="Login">
                </form></td>
       
</main>
<?php include '../view/footer.php'; ?>