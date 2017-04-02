<?php include '../view/header.php'; ?>
<main>
    <h1>Welcome <?php echo $_SESSION['firstName']; ?><?php echo ' ' ?><?php echo $_SESSION['lastName']; ?></h1>
    <p>Choose a book!.</p>
	<form action="index.php" method="post" id="choose_book_form">
        <input type="hidden" name="action" value="choose_book">
     
	<select name='book' method="post">
				<?php foreach($books as $book)  :  ?>
				<option value="<?php echo $book['bookID']; ?>">
					<?php echo $book['title'];?></option>
			    <?php endforeach; ?>
			</select>

    <input type='hidden' name='action' value='add_review' />
		<input type='submit' value='View' />
                </form></td>
       
</main>
<?php include '../view/footer.php'; ?>