<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
<p>1) Створити файл .htaccess, написати у ньому рядок: <br>
    <b>AddDefaultCharset utf-8</b>
</p>
<p>2) Створити файл <b>indexx.php</b></p>
<p>3) На головній сторінці створіть форму з такими елементами:</p>
<p>4) На іншій сторінці реалізуйте прийом даних цієї форми та відображення переданої інформації, у т.ч. фотографії.</p>

<form action="form.php" method="post" style="clear: both; text-align: right; line-height: 25px; float: left"
      enctype="multipart/form-data">
    <p>Логін: <input type="email" name="login" value="<?= $_SESSION['login'] ?>"></p>
    <p>Пароль: <input type="password" name="password"></p>
    <p>Пароль (ще раз): <input type="password" name="password_confirmation"></p>
    <p>Стать: <input type="radio" name="gender" value="Чоловік">Чоловік
        <input type="radio" name="gender" value="Жінка">Жінка</p>
    <p>Місто:
        <select name="city">
            <option value="Житомир">Житомир</option>
            <option value="Київ">Київ</option>
            <option value="Коростишів">Коростишів</option>
        </select>
    </p>
    Улюблені ігри:
    <input type="checkbox" name="hobby[]" value="футбол">футбол
    <p><input type="checkbox" name="hobby[]" value="баскетбол">баскетбол</p>
    <p><input type="checkbox" name="hobby[]" value="волейбол">волейбол</p>
    <p><input type="checkbox" name="hobby[]" value="шахи">шахи</p>
    <p><input type="checkbox" name="hobby[]" value="World of Tanks">World of Tanks</p>
    <p>Про себе: <textarea cols="30" rows="10" name="about"></textarea></p>
    <p>Фотографія: <input type="file" accept="image/jpeg" name="file"></p>
    <input type="submit" name="uploadBtn" value="Зареєструватись" />
</form>
</body>
</html>
