<?php  if (!isset($_SESSION["currentUser"])) { $_SESSION["currentUser"] = NULL; } 
       if (!isset($_SESSION["currentUserLast"])) { $_SESSION["currentUserLast"] = NULL; }
?>
<footer>
    <p class="copyright">
        &copy; <?php echo date("Y"); ?> Book Reviews.
    </p>
    <div id="user"><p2><strong> Current User: </strong> <?php 
    
    $currentUser = 'Log In!';
    if ($_SESSION["currentUser"] != NULL) {
    $currentUser = $_SESSION["currentUser"];
    }
    echo $currentUser; echo ' '; echo $_SESSION['currentUserLast']
    ?></p2></div><br>
     
</footer>
</body>
</html>