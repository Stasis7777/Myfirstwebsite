<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Это пост"."<br />";
    
    //var_dump($_POST);
    if ((isset($_POST['name']) && $_POST['name'] !== '') && (isset($_POST['password']) && $_POST['password'] !== '')) {
      echo "Все збс"."<br />";
      if ($_POST['name'] === "admin" && $_POST['password'] === "12345") {
        echo "Вы прошли в Вальхаллу"."<br />";
      }
      else {
        echo "Вы не прошли в Вальхаллу"."<br />";
      }
    }
    else {
      echo "Все не збс"."<br />";
    }
  }

  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo "Это ГЕТ"."<br />";
  }