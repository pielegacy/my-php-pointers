<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Web Page</title>
</head>

<body>
  <?php
    $story = file_get_contents("story.txt");
  ?>
    <h1>Welcome</h1>
    <a href="second.php">Go to the second page</a>
    <p><?= $story ?></p>
</body>

</html>