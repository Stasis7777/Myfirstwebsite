<html>
<head>
    <title>PHP</title>
</head>
<body>
    <form method="POST" action="server.php">
        <p>
            Name
        </p>
        <input value="123" type="text" name="name">
        <p>
            Password
        </p>
        <input placeholder="321" type="text" name="password">
        <br />
        <input type="submit">
    </form>
</body>
</html>

<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// echo '<h1>Привет, <b>' . $_GET['name'] . $_GET['password'] . '</b> ! </h1>';
// }
?>


<form action="dabl.php" method="POST">
    <input type="submit" value="Перейти на dabl.php" />
</form>




<!-- <form>
    <input type="button" value="Переход на dabl.php">
</form> -->


<!-- /*
    <form include "dabl.php">
        <input type="button">
    </form> 

?> -->