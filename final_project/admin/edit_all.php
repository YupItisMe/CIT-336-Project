<?php include '../view/header.php'; ?>
<main>
    
     
  
    <table>
          <strong><h2>Authors </h2></strong>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th class='right'>&nbsp</th>
        </tr>
<?php    
     foreach($authors as $value) {
    ?><tr><?php
     ?><td><strong><?php echo $value['firstName'] ;echo ' '; ?></strong></td><?php
     ?><td class='left'><strong><?php echo $value['lastName'] ;echo ' '; ?></strong></td><?php
     ?><td><form action="delete_author" method="post"><?php
                   ?><input type="hidden" name="author_id"<?php
                         ?>value="<?php echo $value['authorID']; ?>"><?php
                    ?><input type="hidden" name="reviewer_id"<?php
                          ?>value="<?php echo $value['reviewerID']; ?>"><?php
                    ?><input type="submit" value="Delete"><?php
                ?></form></td><?php
     ?><td><form action='edit_author_form' method="post"><?php
                   ?><input type="hidden" name="author_id"<?php
                         ?>value="<?php echo $value['authorID']; ?>"><?php
                    ?><input type="hidden" name="reviewer_id"<?php
                          ?>value="<?php echo $value['reviewerID']; ?>"><?php
                    ?><input type="submit" value="Edit"><?php
                ?></form></td><?php
     ?></tr><?php
     
     
     }  
     ?></table><br><br>     

 <table>
          <strong><h2>Books </h2></strong>
        <tr>
            <th>Title</th>
            <th>Age Group</th>
            <th class='right'>&nbsp</th>
        </tr>
<?php    
     foreach($books as $value) {
    ?><tr><?php
     ?><td><strong><?php echo $value['title'] ;echo ' '; ?></strong></td><?php
     ?><td class='left'><strong><?php echo $value['ageType'] ;echo ' '; ?></strong></td><?php
     ?><td><form action="delete_book" method="post"><?php
                   ?><input type="hidden" name="book_id"<?php
                         ?>value="<?php echo $value['bookID']; ?>"><?php
                    ?><input type="hidden" name="genre_id"<?php
                          ?>value="<?php echo $value['genreID']; ?>"><?php
                    ?><input type="submit" value="Delete"><?php
                ?></form></td><?php
     ?><td><form action="edit_book_form" method="post"><?php
                   ?><input type="hidden" name="book_id"<?php
                         ?>value="<?php echo $value['bookID']; ?>"><?php
                    ?><input type="hidden" name="genre_id"<?php
                          ?>value="<?php echo $value['genreID']; ?>"><?php
                    ?><input type="submit" value="Edit"><?php
                ?></form></td><?php
     ?></tr><?php
     
     
     }  
     ?></table><br><br>
     
     <table>
          <strong><h2>reviews </h2></strong>
        <tr>
            <th>Rating</th>
            <th>Review</th>
            <th class='right'>&nbsp</th>
        </tr>
<?php    
     foreach($reviews as $value) {
    ?><tr><?php
     ?><td><strong><?php echo $value['rating'] ;echo ' '; ?></strong></td><?php
     ?><td class='left'><strong><?php echo $value['reviewNote'] ;echo ' '; ?></strong></td><?php
     ?><td><form action="delete_review" method="post"><?php
                   ?><input type="hidden" name="new_review_id"<?php
                         ?>value="<?php echo $value['reviewID']; ?>"><?php
                    ?><input type="hidden" name="new_author_id"<?php
                          ?>value="<?php echo $value['authorID']; ?>"><?php
                    ?><input type="submit" value="Delete"><?php
                ?></form></td><?php
     ?><td><form action="edit_review_form" method="post"><?php
                   ?><input type="hidden" name="new_review_id"<?php
                         ?>value="<?php echo $value['reviewID']; ?>"><?php
                    ?><input type="hidden" name="new_author_id"<?php
                          ?>value="<?php echo $value['authorID']; ?>"><?php
                    ?><input type="submit" value="Edit"><?php
                ?></form></td><?php
     ?></tr><?php
     
     
     }  
     ?></table><br><br>
 


 
 
 
</main>
<?php include '../view/footer.php'; ?>


