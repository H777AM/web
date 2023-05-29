<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style6.css">
    <title>База данных</title>
</head>

<?php
$user = 'root';
$pass = '';
$db_name = 'lab6';
$hostname = 'localhost';

/* создать соединение */
$lab6 = new mysqli($hostname, $user, $pass, $lab6_name) OR DIE("Не могу создать соединение ");
$result = mysqli_query($lab6, 
'SELECT * from author a 
join browser b on b.author_id = a.author_id');
?>

<body class="page">

<header class="header">
    <nav class="nav">
    <a class="nav_page" href="index.html">Главная</a>
            <a class="nav_page1" href="first_page.html">Первое описание</a>
            <a class="nav_page2" href="second_page.html">Второе описание</a>
            <a class="nav_page3" href="sources.html">Использованные источники</a>
            <a class="nav_page" href="lab4.html">ЛР4</a>
            <a class="nav_page" href="form.html">ЛР5</a>
            <a class="nav_page" href="6lab.php">ЛР6</a>
            <a class="nav_page" href="7lab.html">ЛР7</a>
            <a class="nav_page" href="8lab.html">ЛР8</a>
        <ul class="menu">
            <li><a href="">Соцсети</a>
            <ul>
              <li><a href="#">Telegram</a>
              <li><a href="#">VK</a>
              <li><a href="#">Instagram</a>
            </ul>
            </li>
          </ul>
     </nav>
</header>

   <section>
      <div style="margin-top: 100px; text-align: center">
         <h2>Создатели браузеров</h2>

         <?php foreach($result as $record): ?>

         <div class="intro__title">
            <p>
                <h6> <?=' Создатель ' . $record['name'] . " ". $record['author_name'] . " " . $record['author_surname']?> </h6>
            </p>
         </div>

         <?php endforeach; ?>

      </div>
   </section>


<!--FOOTER-->
<footer class="footer">
    <div class="footer_text">Все права не защищены
    </div>
    
</footer>
</body>
</html>
