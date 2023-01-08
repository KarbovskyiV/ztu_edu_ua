<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css"/>
    <title>Test Font</title>
</head>
<body>

<!-- add all possible options to array and check is value from cookie is exist. -->
<div class="block <?= $_COOKIE['font'] ?>">
    Test
</div>

<p><a href="cookie.php">Back</a></p>

</body>
</html>
