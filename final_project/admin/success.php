<?php include '../view/header.php'; ?>
<main>
    <h1> <?php echo $_SESSION['book_title']; ?></h1><br>
    
    <h2>You have successfully added a review!
          Thank you!
    </h2><br><br>
    
        
        
    <h3>Your Review</h3>  
    <?php // echo $_SESSION['newReviewNote']; ?> 

  <?php echo $newReviewNote; ?>
  <?php echo $rated;         ?>
  <?php echo $newBook_id;    ?>
  <?php echo $author_id;     ?>
  
 
 
 
 
</main>




















<?php include '../view/footer.php'; ?>


