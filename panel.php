<?php
// "panel.php": this file should indicate on the screen whether the user who is trying to access is logged in or not, 
// in case the user is logged, it must also contain a button to log out, 
// destroy the current session and then redirect you to the "index.php" file. 
// If not logged you must alert the user that this is a private section.

echo "you are logged in";
?>

  <main>
   <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="./close_session.php">Sign out</a>
      </li>
    </ul>
   </header>
  </main>