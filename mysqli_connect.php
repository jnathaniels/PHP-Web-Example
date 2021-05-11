<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect to MySQL</title>
</head>

<body>
    <?php
    $dbc = mysqli_connect('localhost', 'root', '', 'test');
    mysqli_set_charset($dbc, 'utf8');
    ?>
</body>

</html>