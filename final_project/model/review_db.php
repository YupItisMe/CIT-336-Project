<?php
function get_review_by_book_id($book_id) {
	global $db;
	$query = 'SELECT * FROM reviews
              WHERE bookID = :book_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':book_id', $book_id);
    $statement->execute();
    $review = $statement->fetch();
    $statement->closeCursor();
	$reviewNote = $review['reviewNote'];
	return $reviewNote;
}
function get_review_author_id($book_id) {
	global $db;
	$query = 'SELECT * FROM reviews
              WHERE bookID = :book_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':book_id', $book_id);
    $statement->execute();
    $reviewCreator = $statement->fetch();
    $statement->closeCursor();
    $reviewCreator_ID = $reviewCreator['authorID'];
        return $reviewCreator_ID;
}
    function get_review_author_firstName($revAuthID) {
	global $db;
	$query = 'SELECT * FROM authors
              WHERE authorID = :revAuthID';
    $statement = $db->prepare($query);
    $statement->bindValue(':revAuthID', $revAuthID);
    $statement->execute();
    $reviewAuthor = $statement->fetch();
    $statement->closeCursor();
    $author_first = $reviewAuthor['firstName'];
        return $author_first;
    
}  
 function get_review_author_lastName($revAuthID) {
	global $db;
	$query = 'SELECT * FROM authors
              WHERE authorID = :revAuthID';
    $statement = $db->prepare($query);
    $statement->bindValue(':revAuthID', $revAuthID);
    $statement->execute();
    $reviewAuthor = $statement->fetch();
    $statement->closeCursor();
    $author_last = $reviewAuthor['lastName'];
        return $author_last;
    
}  

function add_review ($author_ID, $book_ID, $rated, $review_note) {
    global $db;
    $query = 'INSERT INTO reviews
             (authorID, bookID, rating, reviewNote)
              VALUES
             (:author_ID, :book_ID, :rated, :review_note)';
    $statement = $db->prepare($query);
    $statement->bindValue(':author_ID', $author_ID);
    $statement->bindValue(':book_ID', $book_ID);
    $statement->bindValue(':rated', $rated);
    $statement->bindValue(':review_note', $review_note);
    $statement->execute();
    $statement->closeCursor();
}
function update_review_note($review_ID, $newNote) {
    global $db;
    $query = 'UPDATE 
                reviews
            SET 
                reviewNote = :newNote
              WHERE 
                reviewID = :review_ID';
    $statement = $db->prepare($query);
    $statement->bindValue(':review_ID', $review_ID);
    $statement->execute();
    $statement->closeCursor();

}


function get_reviews($book_id) {
   global $db;
	$query = 'SELECT * FROM reviews';			  
	$revs = $db->query($query);
	return $revs;
}
    
 //  print_r($array); 
    
    
//    <!--UPDATE `reviews` SET `reviewNote` = 
//'This book was a ton of fun. I recommend it to everyone!
//' WHERE `reviews`.`reviewID` = 3;-->
//
//function delete_voter($voter_id) {
//    global $db;
//    $query = 'DELETE FROM voters
//              WHERE voterID = :voter_id';
//    $statement = $db->prepare($query);
//    $statement->bindValue(':voter_id', $voter_id);
//    $statement->execute();
//    $statement->closeCursor();
//}

?>

