<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect Page</title>
</head>
<body>
    <h1>Redirecting...</h1>
    <?php
        // Redirect to www.yourdomainname.com
        header("Location: https://www.yourdomainname.com");
        exit; // Make sure to add the exit to prevent further execution
    ?>
</body>
</html>
