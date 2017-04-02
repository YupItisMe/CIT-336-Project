<?php include '../view/header.php'; ?>
<main>
    <form action="index.php" method="post" id="new_review">
        <input type="hidden" name="action" value="add_new_review">
    
    <h1> <?php echo $_SESSION['book_title']; ?></h1><br>
    
    <h2>Please enter your review and click submit!</h2>

  <form method="post" action="add_new_review.php">
 <textarea name="noteArea" style="width: 250px; height: 150px;">
 </textarea><br>

  <label>Rating:</label>
            <select name="rating">
            <?php  for ($v = 10; $v <= 100; $v += 10) : ?>
                <option value="<?php echo $v; ?>" >
                    <?php echo $v; ?>
                </option>
            <?php endfor; ?>
                
            </select><br>
 
   <input type='hidden' name='action' value='success' />
		<input type='submit' value='submit!' />
 
</form>
 
 
 
 
</main>




















<?php include '../view/footer.php'; ?>


