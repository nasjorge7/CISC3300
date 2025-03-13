<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Note Created</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="success">
      Note created successfully!
    </div>
    <p><strong>Title:</strong> <?php echo $title; ?></p>
    <p><strong>Description:</strong> <?php echo $description; ?></p>
    <a href="index.php">Create another note</a>
  </div>
</body>
</html>
