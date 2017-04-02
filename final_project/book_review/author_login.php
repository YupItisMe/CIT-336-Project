<?php include '../view/header.php'; 
?>


<!DOCTYPE html>
<main>

    <h2>Author Portal</h2>
    <p>Login so that you can add and view reviews!.</p>
	<form action="index.php" method="post" id="author_login_form">
        <input type="hidden" name="action" value="author_login">
     
	<select name='email' method="post">
				<?php foreach($authors as $author)  :  ?>
				<option value="<?php echo $author['emailAddress']; ?>">
					<?php echo $author['firstName'];?><?php echo ' ';?><?php echo $author[ 'lastName']; ?></option>
			    <?php endforeach; ?>
			</select>

       
    <td><form action="index.php" method="post">           
                    <input type="submit" value="Login">
                </form></td>
       
</main>
<?php include '../view/footer.php'; ?>