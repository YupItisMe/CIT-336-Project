<?php

require('../model/database.php');
require('../model/author_db.php');
require('../model/review_db.php');
require('../model/book_db.php');
require('../model/admin_db.php');

$lifetime = 60 * 60 * 24 * 14;
session_set_cookie_params($lifetime, '/');
session_start();

$_SESSION['currentUser'] = NULL;
$_SESSION['currentUserLast'] = NULL;

//Get the Admin emails for Admin login
$admins = get_admin_emails();
$email_id = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

//Get the Books, Reviews, genres and Authors all in one place.
$authors = get_emails(); 
$books = get_books();
$reviews = get_reviews_admin();
$genres = get_genres();


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'admin_login';
    }
}
           
     if ($action == 'admin_login') {
        
     echo 'ADMIN_LOGIN';
         if ($email_id == 'admin@book_application.com' 
          || $email_id == 'josh@readers.com' 
          || $email_id == 'chris@readers.com') {
       $_SESSION['firstName'] = 'Local';
       $_SESSION['lastName'] = 'Admin';
       $_SESSION['currentUser'] = $_SESSION['firstName'];
       $_SESSION['currentUserLast'] = $_SESSION['lastName'];
       
       
       include('edit_all.php');
          } else {
       include('admin_login.php');
     }
   }else if ($action == 'edit_author_form') {
       echo 'EDIT_FORM';
       $author_id = filter_input(INPUT_POST, 'author_id', FILTER_VALIDATE_INT);
       $reviewer_id = filter_input(INPUT_POST, 'reviewer_id', FILTER_VALIDATE_INT);
       $authors = edit_author($author_id);
       
       include('edit_author_form.php');
       
   } else if ($action == 'delete_author') {
       
       $author_id = filter_input(INPUT_POST, 'author_id', FILTER_VALIDATE_INT);
       $reviewer_id = filter_input(INPUT_POST, 'reviewer_id', FILTER_VALIDATE_INT);
       
   }
//   else if ($action == 'delete_book') {
//       
//       $book_id = filter_input(INPUT_POST, 'book_id', FILTER_VALIDATE_INT);
//       $genre_id = filter_input(INPUT_POST, 'genre_id', FILTER_VALIDATE_INT);
//       
//   }else if ($action == 'edit_book_form') {
//       
//       $book_id = filter_input(INPUT_POST, 'book_id', FILTER_VALIDATE_INT);
//       $genre_id = filter_input(INPUT_POST, 'genre_id', FILTER_VALIDATE_INT);
//       
//   }else if ($action == 'delete_review') {
//       
//       $new_review_id = filter_input(INPUT_POST, 'new_review_id', FILTER_VALIDATE_INT);
//       $new_author_id = filter_input(INPUT_POST, 'new_author_id', FILTER_VALIDATE_INT);
//       
//   }else if ($action == 'edit_review_form') {
//       
//       $new_review_id = filter_input(INPUT_POST, 'new_review_id', FILTER_VALIDATE_INT);
//       $new_author_id = filter_input(INPUT_POST, 'new_author_id', FILTER_VALIDATE_INT);
//       
//   }
        
        
        
?>