<!-- Include Database -->
<!--php 
    require_once __DIR__ . '/partials/database.php';
?--> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Dischi</title>
    <link rel="stylesheet" href="./dist/css/app.css">
    <link rel="shortcut icon" href="#" />
</head>
<body>
    
    <!-- Header Section -->
    <?php 
    include __DIR__ . '/partials/header.php';
    ?>

    <!-- Main Section -->
    <?php 
    include __DIR__ . '/partials/mainvue.php';
    ?>
    
    <!-- JS Include -->
    <script src="dist/js/main.js"></script>
</body>
</html>