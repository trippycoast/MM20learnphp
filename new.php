<?php include('partials/header.php'); ?>
    <div class="container">
        <form action="/add.php" method="POST">
            <input type="text" name="title" require>
            <textarea name="body"></textarea>
            <input class="button is-primary" type="submit" value="Add">
        </form>
