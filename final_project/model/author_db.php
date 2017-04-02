<?php
function get_author_by_email($email_id) {
    global $db;
	$query = 'SELECT * FROM authors
              WHERE emailAddress = :email_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':email_id', $email_id);
    $statement->execute();
    $author = $statement->fetch();
    $statement->closeCursor();
	$author_email = $author['emailAddress'];
    return $author_email;    
}







function get_author_first($email_id) {
    global $db;
	$query = 'SELECT * FROM authors
              WHERE emailAddress = :email_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':email_id', $email_id);
    $statement->execute();
    $author = $statement->fetch();
    $statement->closeCursor();
	$author_first = $author['firstName'];
    return $author_first;    
}

function get_emails() {
	global $db;
	$query = 'SELECT * FROM authors
			  ORDER BY firstName';
	$authors = $db->query($query);
	return $authors;
}





function get_author_last($email_id) {
    global $db;
	$query = 'SELECT * FROM authors
              WHERE emailAddress = :email_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':email_id', $email_id);
    $statement->execute();
    $author = $statement->fetch();
    $statement->closeCursor();
	$author_last = $author['lastName'];
    return $author_last;    
}

function get_author_rev_id($author_id) {
    global $db;
	$query = 'SELECT * FROM authors
              WHERE authorID = :author_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':author_id', $author_id);
    $statement->execute();
    $author = $statement->fetch();
    $statement->closeCursor();
	$author_rev_id = $author['reviewerID'];
    return $author_rev_id;    
}

function get_author_id_with_book_id($book_id) {
    global $db;
	$query = 'SELECT * FROM books
              WHERE bookID = :book_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':book_id', $book_id);
    $statement->execute();
    $book = $statement->fetch();
    $statement->closeCursor();
	$author_id = $book['authorID'];
    return $author_id;    
}
function get_author_by_id($email_id) {
    global $db;
	$query = 'SELECT * FROM authors
              WHERE emailAddress = :email_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':email_id', $email_id);
    $statement->execute();
    $author = $statement->fetch();
    $statement->closeCursor();
	$author_id = $author['authorID'];
    return $author_id;    
}
function get_firstName_by_author_id($author_id) {
    global $db;
	$query = 'SELECT * FROM authors
              WHERE authorID = :author_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':author_id', $author_id);
    $statement->execute();
    $author = $statement->fetch();
    $statement->closeCursor();
	$author_first = $author['firstName'];
    return $author_first;    
}
function get_lastName_by_author_id($author_id) {
    global $db;
	$query = 'SELECT * FROM authors
              WHERE authorID = :author_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':author_id', $author_id);
    $statement->execute();
    $author = $statement->fetch();
    $statement->closeCursor();
	$author_last = $author['lastName'];
    return $author_last;    
}