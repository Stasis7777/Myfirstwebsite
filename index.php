<html>
<head>
    <title>PHP</title>
</head>

<head>
    <meta charset="utf-8" />
    <title>Semantic UI CDN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
</head>
<body>
      <!-- Your Semantic UI Code -->
</body>



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
    <input class="ui button" type="submit" value="Перейти на Главную" />
</form>




<!-- <form>
    <input type="button" value="Переход на dabl.php">
</form> -->


<!-- /*
    <form include "dabl.php">
        <input type="button">
    </form> 

?> -->