<html>
<head>
    <title>PHP</title>
</head>
<body>
    <form metod="GET" action="index.php">
        <p>
            Name
        </p>
        <input type="text" name="name">
        <p>
            Password
        </p>
        <input type="text" name="password">
        <br />
        <input type="submit">
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
echo '<h1>Привет, <b>' . $_GET['name'] . $_GET['password'] . '</b> ! </h1>';
}
?>