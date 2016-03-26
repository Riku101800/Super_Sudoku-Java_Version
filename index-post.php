<?php

    require 'lib/game.inc.php';

    session_unset();

    // If a name isn't entered
    if( !isset($_POST['userName']) || empty($_POST['userName']) ) {
        header( 'Location: ./' );
        exit;
    }

    // If a name is entered, save it in a session
    if( isset($_POST['userName']) ) {
        $_SESSION['userName'] = $_POST['userName'];
    }

    // Check for 'Cheat Mode'
    if( isset($_POST['cheatMode']) ){
        $_SESSION['cheatMode'] = true;
        header( 'Location: sudoku.php ');
        exit;
    }
    else {
        header( 'Location: sudoku.php ');
        exit;
    }

    //phpinfo();

?>
