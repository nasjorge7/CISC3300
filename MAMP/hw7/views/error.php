<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Error</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="error">
      <?php 
        foreach ($errors as $error) {
          echo $error . "<br>";
        }
      ?>
    </div>
    <a href="index.php">Go back</a>
  </div>
</body>
</html>
