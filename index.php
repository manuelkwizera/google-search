<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="keywords" placeholder="search..." required>
        <input type="text" name="keywords" placeholder="search..." required>
        <button name="submit">search</button>
    </form>
    <?php
        $search_url = "https://www.google.com/search?q=";
        if(isset($_POST['submit'])){
            $keywords = $_POST['keywords'];
            header("Location: " . $search_url.$keywords);
        }
    ?>
</body>
</html>