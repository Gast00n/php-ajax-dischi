<!-- Include Database -->
<?php 
    include __DIR__ . '/partials/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Dischi</title>
    <link rel="stylesheet" href="./dist/css/app.css">
</head>
<body>
    
    <!-- Header Section -->
    <header>
        <div class="container">
            <div class="logo">
                <img src="./img/logo.png" alt="">
            </div>
        </div>
    </header>

    <!-- Main Section -->
    <?php 
    include __DIR__ . '/partials/main.php';
    ?>
    
    <!-- JS Include -->
    <script src=".dist/js/main.js"></script>
</body>
</html>