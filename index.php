<?php
$json = file_get_contents('posts.json');
$posts = json_decode($json, true);
?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    </head>
    <body>
        <div>
            <a class="button is-primary" href="/new.php">newwha</a>
                <ul>
                    <?php 
                    
                        foreach ($items as $item): ?>
                        <div class="card">
  <header class="card-header">
    <p class="card-header-title">
      Component
    </p>
  </header>
  <div class="card-content">
    <div class="content">
    </div>
  </div>
  <footer class="card-footer">
    <a href="#" class="card-footer-item">Save</a>
    <a href="#" class="card-footer-item">Edit</a>
    <a href="#" class="card-footer-item">Delete</a>
  </footer>
</div>
                    <li>
                        <?=$item ?>
                    </li>
                    <?php endforeach;?>
<?php include('partials/footer.php'); ?>