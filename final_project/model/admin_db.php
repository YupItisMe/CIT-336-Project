<?php

function get_admin_emails() {
	global $db;
	$query = 'SELECT * FROM administrators
			  ORDER BY emailAddress';
	$admins = $db->query($query);
	return $admins;
}
function get_authors() {
	global $db;
	$query = 'SELECT * FROM authors
			  ORDER BY firstName';
	$authors = $db->query($query);
	return $authors;
}
function get_reviews_admin() {
	global $db;
	$query = 'SELECT * FROM reviews
			  ORDER BY authorID';
	$reviews = $db->query($query);
	return $reviews;
}
function get_genres() {
	global $db;
	$query = 'SELECT * FROM genres
			  ORDER BY genreID';
	$genres = $db->query($query);
	return $genres;
}
function edit_author () {
    global $db;
    $query = 'SELECT * FROM authors 
              WHERE authorID = author_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':author_id', $author_id);
    $statement->execute();
    $author = $statement->fetch();
    $statement->closeCursor();
    return $author;    
}













































