<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hello Bulma!</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
    <div class="container">
        <form action="/add.php" method="POST">
            <input type="text" name="title" require>
            <textarea name="body"></textarea>
            <input class="button is-primary" type="submit" value="Add">
        </form>
    </div>
</body>
</html>