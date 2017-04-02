<?php

// Get all the products for the registration dropdown list
function get_books() {
	global $db;
	$query = 'SELECT * FROM books';			  
	$books = $db->query($query);
	return $books;
}
function get_product_code($name) {
    global $db;
	$query = 'SELECT * FROM products
              WHERE name = :name';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
	$product_code = $product['productCode'];
    return $product_code; 
}

function get_book_title($book_id) {
    global $db;
	$query = 'SELECT * FROM books
              WHERE bookID = :book_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':book_id', $book_id);
    $statement->execute();
    $book = $statement->fetch();
    $statement->closeCursor();
	$book_title = $book['title'];
    return $book_title;  
}
function get_book_age_type($book_id) {
    global $db;
	$query = 'SELECT * FROM books
              WHERE bookID = :book_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':book_id', $book_id);
    $statement->execute();
    $book = $statement->fetch();
    $statement->closeCursor();
	$book_age = $book['ageType'];
    return $book_age;  
}
function get_book_summary($book_id) {
    global $db;
	$query = 'SELECT * FROM books
              WHERE bookID = :book_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':book_id', $book_id);
    $statement->execute();
    $book = $statement->fetch();
    $statement->closeCursor();
	$book_summary = $book['summary'];
    return $book_summary;  
}