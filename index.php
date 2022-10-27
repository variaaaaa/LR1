<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap" rel="stylesheet">
    <?php require "name.php"; ?>
</head>
<body>
    <header> 
        <div class="header">
            <div class="container">
                <div class="header-line">
                    <div class="nav">
                        <a data-content="Homepage" href="<?php 
                            $name='Homepage'; 
                            $link='index.php'; 
                            $current_page=true; 
                            echo $link; ?>"> 
                            <?php
                            if( $current_page )
                                echo $name;
                            ?>
                        </a>
                        <a data-content="Контакты" href="#go-to-footer">Контакты </a>
                        <a data-content="Достижения" href="<?php 
                            $name='Достижения'; 
                            $link='achievements.php'; 
                            $current_page=true; 
                            echo $link; ?>"> 
                            <?php 
                            if( $current_page ) 
                                echo $name;
                            ?>
                        </a>
                        <a data-content="Log in" href="<?php 
                            $name='Log in'; 
                            $link='login.php'; 
                            $current_page=true; 
                            echo $link; ?>"> 
                            <?php 
                            if( $current_page ) 
                                echo $name;
                            ?>
                        </a>
                        <a data-content="Feedback" href="<?php 
                            $name='Feedback'; 
                            $link='feedback.php'; 
                            $current_page=true; 
                            echo $link; ?>"> 
                            <?php 
                            if( $current_page ) 
                                echo $name;
                            ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="elements">
            <div class="text-desc">
                <h1 class="description">This is the header</h1>
            </div>
            <div class="forsite">
                <?php 
                $s = date('s');
                $os = $s % 2;
                if ($os === 0)
                $name = 'image1.png';
                else
                $name = 'image2.png';
                echo '<img src = "'.$name.'" alt="Меняющаяся фотография" id = "body" height = 500px>';
                ?>
            </div>
            <div class = "list">
            <?php require "list.php"?>
            </div>
        </div>
        <div class="tables">
            <table style = "margin:50px" border="1">
                <caption > Задания №1:</caption>
                <thead>
                    <tr>
                        <th>Номер</th>
                        <th>Условие</th>
                        <th>Статус выполнения</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Шапка с меню (навигация по разделам)</td>
                        <td>  Done</td>
                    </tr>
                    <tr>
                        <td>2</td>
                         <td>Футер с контактной информацией/копирайтом</td>
                        <td>  Done</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Фотография и/или другие изображения</td>
                        <td>  Done</td></tr>
                    <tr>
                        <td>4</td>
                        <td>Таблица</td>
                        <td>  Done</td></tr>
                    <tr>
                        <td>5</td>
                        <td>Подключён шрифт с Google Fonts</td>
                        <td>  Done</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <a name="go-to-footer"></a>
        <div class="down-line">
            <div class="bottom-items">
            <a class="info">Варвара Саркисова, группа 211-362 </a>
                <a class="info">Почта:</a>
                <a class="info" href="@">varyakisova@mail.ru</a>
                <a class="info">Телефон:</a>
                <a class="info" href="@">+7(915)041-91-27</a>
                <a class = "foot-date" href="#"><?php require "date.php" ?></a>
            </div>
        </div>
    </footer> 
</body> 
</html>