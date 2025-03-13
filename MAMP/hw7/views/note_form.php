<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create a New Note</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Create a New Note</h1>
    <form method="POST" action="index.php">
      <label for="title">Title:</label>
      <input type="text" id="title" name="title" required>

      <label for="description">Description:</label>
      <textarea id="description" name="description" rows="5" required></textarea>

      <input type="submit" value="Submit Note">
    </form>
  </div>
</body>
</html>
