<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & jQuery App</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Welcome to the PHP & jQuery App</h1>

    <!-- Button to fetch data from PHP -->
    <button id="fetchDataBtn">Fetch Data</button>
    <div id="dataDisplay" style="margin-top: 20px; border: 1px solid #ccc; padding: 10px;">
        Data will appear here...
    </div>

    <!-- Including HTML content -->
    <?php include 'includeme.html'; ?>

    <script>
        $(document).ready(function() {
            $('#fetchDataBtn').on('click', function() {
                $.ajax({
                    url: 'data.php',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        $('#dataDisplay').html('Message from server: ' + response.message);
                    },
                    error: function() {
                        $('#dataDisplay').html('Error fetching data.');
                    }
                });
            });
        });
    </script>
</body>
</html>
