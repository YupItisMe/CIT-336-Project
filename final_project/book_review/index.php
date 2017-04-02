<?php

require('../model/database.php');
require('../model/author_db.php');
require('../model/review_db.php');
require('../model/book_db.php');

$lifetime = 60 * 60 * 24 * 14;
session_set_cookie_params($lifetime, '/');
session_start();





$_SESSION['currentUser'] = NULL;
$_SESSION['currentUserLast'] = NULL;

$email_id = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$book_ID = filter_input(INPUT_POST, 'book', FILTER_VALIDATE_INT);
$_SESSION['rating'] = filter_input(INPUT_POST, 'rating', FILTER_VALIDATE_INT);
$authors = get_emails(); 
$books = get_books(); 

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'author_login';
    }
}
           
     if ($action == 'author_login') {
        
     
         if ($email_id == 'Tolkien@yahoo.com' 
          || $email_id == 'James@yahoo.com' 
          || $email_id == 'Orson@yahoo.com'
          || $email_id == 'Poalini@yahoo.com'
          || $email_id == 'Sparks@yahoo.com'
          || $email_id == 'Mull@yahoo.com') {
       $_SESSION['firstName'] = get_author_first($email_id);
       $_SESSION['lastName'] = get_author_last($email_id);
       $_SESSION['currentUser'] = $_SESSION['firstName'];
       $_SESSION['currentUserLast'] = $_SESSION['lastName'];
       $_SESSION['currentEmail'] = $email_id;
       $_SESSION['book_ID'] = $book_ID;
       include('list_genres.php'); 
         } else {
	   include('author_login.php');
    }
       
     } else if ($action == 'add_review') {
        $_SESSION['currentUser'] = $_SESSION['firstName'];
        $_SESSION['currentUserLast'] = $_SESSION['lastName'];
        $_SESSION['book_ID'] = filter_input(INPUT_POST, 'book', FILTER_SANITIZE_STRING);
        $_SESSION['author_ID'] = get_author_id_with_book_id($_SESSION['book_ID']);
        $_SESSION['author_rev_ID'] = get_author_rev_id($_SESSION['author_ID']);
        $_SESSION['book_title'] = get_book_title($_SESSION['book_ID']);
        $_SESSION['book_age_type'] = get_book_age_type($_SESSION['book_ID']);
        $_SESSION['book_summary'] = get_book_summary($_SESSION['book_ID']);
        
        $newEmail = $_SESSION['currentEmail'];
        $userAuthor_id = get_author_by_id($newEmail);
        
        
        $reviewNote = get_review_by_book_id($_SESSION['book_ID']);
        $reviewAuthor_ID = get_review_author_id($_SESSION['book_ID']);
        $revAuthor_firstName = get_review_author_firstName($reviewAuthor_ID);
        $revAuthor_lastName = get_review_author_lastName($reviewAuthor_ID);
        
        $newBook_id = $_SESSION['book_ID'];
        $reviews = get_reviews($newBook_id);
        
        
        
            include('add_review.php');
         
     } else if ($action == 'add_new_review') {
         
         $_SESSION['currentUser'] = $_SESSION['firstName'];
         $_SESSION['currentUserLast'] = $_SESSION['lastName'];
         
         include('add_new_review.php');
         
     } else if ($action == 'success') {
        $_SESSION['currentUser'] = $_SESSION['firstName'];
        $_SESSION['currentUserLast'] = $_SESSION['lastName'];
        $_SESSION['newReviewNote'] = filter_input(INPUT_POST, 'noteArea', FILTER_SANITIZE_STRING);
        
        $newEmail = $_SESSION['currentEmail'];
        
        $newReviewNote = $_SESSION['newReviewNote'];
        $rated = $_SESSION['rating'];
        $newBook_id = $_SESSION['book_ID'];
        $author_id = get_author_by_id($newEmail);
         add_review ($author_id, $newBook_id, $rated, $newReviewNote);
        // update_review_note($review_ID, $newNote); 
        
            include('success.php');
     }
     
    

        
      
        
        
        
        
?>