<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product Search</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>

  <h1>Product Search</h1>
  
  <form id="searchForm">
    <label for="searchInput"><strong>Search by Product Type:</strong></label>
    <input type="text" id="searchInput" name="q" placeholder="Enter product type..." />
    <button type="submit">Search</button>
  </form>

  <div id="result"></div>

  <!-- Include the JavaScript for AJAX functionality -->
  <script src="js/search.js"></script>
</body>
</html>
