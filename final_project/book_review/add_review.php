<?php include '../view/header.php'; ?>
<main>
    <form action="index.php" method="post" id="book_overview">
        <input type="hidden" name="action" value="add_review">
    
    <h1> <?php echo $_SESSION['book_title']; ?></h1><br>
    
    <strong><p2>Title: </p2></strong>
 <?php echo $_SESSION['book_title']; ?><br><br>
 
 <strong><label>Age Group: </label></strong>
 <?php echo $_SESSION['book_age_type']; ?><br><br>
 
 <strong><label>Summary: </label></strong><br><br>
 <?php echo $_SESSION['book_summary']; ?><br><br>

 <strong><Label> Current Reviews </label></strong><br><br>
 
  
<?php 
            foreach($reviews as $value) {  
		if ($value['bookID'] == $_SESSION['book_ID']) {
                    $rating = $value['rating'];
                    $firstName = get_firstName_by_author_id($value['authorID']); 
                    $lastName = get_lastName_by_author_id($value['authorID']);
                    ?><strong><?php echo $firstName;echo ' '; ?></strong><?php
                    ?><strong><?php echo $lastName; echo ' -'; ?></strong><?php
                    ?><?php echo $value['reviewNote']; echo ' '; ?><?php
                    ?><strong><?php echo $rating; ?></strong> / 100 <br><br><?php
                    
                   }
                
               } 
            
               ?><br>
                	
    
    

			
            
 
 <?php
 
 
 if ($userAuthor_id == $_SESSION['author_ID']) {
       ?><ul><?php echo "Sorry you cannot write a review for your own book"
             ?><li><a href="/final_project/book_review/index.php">Home Page</a></li><?php
         ?></ul><?php
 } else {
     ?><input type='hidden' name='action' value='add_new_review' /><?php
		?><input type='submit' value='Add Review!' /><?php
               ?></form></td><?php
 }
 ?>
 
 
 
</main>




















<?php include '../view/footer.php'; ?>


