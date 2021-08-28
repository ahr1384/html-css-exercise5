<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> search about "<?php echo $_GET["search"]; ?>"</title>
    <link rel="stylesheet" href="./../css/style.css">
</head>
<br>

<body style="text-align: center; overflow:hidden;">
    Your search is "<B style="color: red; font-size: 20px; font-weight:800;"><?php echo $_GET["search"]; ?></B>"<br>
    -----------------<br>
    <br>
    <form action="" method="GET">
        <input type="search" name="search" value="<?php echo $_GET["search"]; ?>" style="padding: 10px 15px; width:40%; outline: none; font-size:16px;">
    </form>
</body>

</html>