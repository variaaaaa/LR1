
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="feedback_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <?php require "name.php"; ?>
</head>
<body>
<header>
        <div class="header">
            <div class="container">
                <div class="header-line">
                    <div class="nav">
                        <!--<a data-content="Homepage" class="my-page" href="index.php">Homepage &#9749;</a>-->
                        <a data-content="Homepage" href="<?php 
                            $name='На главную'; 
                            $link='index.php'; 
                            $current_page=true; 
                            echo $link; 
                        ?>"> <?php 
                        if( $current_page ) 
                            echo $name;
                        ?></a>
                        <a data-content="Контакты" href="#go-to-footer">Контакты</a>
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
                            echo $link; 
                        ?>"> <?php 
                        if( $current_page ) 
                            echo $name;
                        ?></a>
                         <a data-content="Feedback" href="<?php 
                            $name='Обратная связь'; 
                            $link='feedback.php'; 
                            $current_page=true; 
                            echo $link; 
                        ?>"> <?php 
                        if( $current_page ) 
                            echo $name;
                        ?></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="background-login">
            <div class="container-fb-form">
            <form class="feedback_form" method="post" name="feedback_form">
                <h1 class="name-fb">Обратная связь</h1>
                <div class="elements-fb">
                    <p>Фамилия: <input type="text" name="surname-input"placeholder="Введите фамилию" size="40" value="<?php if (isset($_GET['name-input'])){
                        echo $_GET['name-input']; }?>"/></p>
                    <p>Имя: <input type="text" name="name-input"placeholder="Введите имя" size="40" value="<?php if (isset($_GET['name-input'])){
                        echo $_GET['name-input']; }?>"/></p>
                    <p>Отчество: <input type="text" name="secondname-input"placeholder="Введите отчество" size="40" value="<?php if (isset($_GET['name-input'])){
                        echo $_GET['name-input']; }?>"/></p>    
                    <p>Email: <input type="email" name="email-input"placeholder="Введите email" size="30" value="<?php if (isset($_GET['email-input'])){
                        echo $_GET['email-input']; }?>"/></p>
                    <div class="from-where">
                        <p>Откуда узнали о нас? </p>
                        <p><input type="radio" name="type-input" value="1" <?php if (isset($_GET['type-input']) & $_GET['type-input']='1'){
                        echo 'checked';}?>/>В школе/в университете/на работе</p>
                        <p><input type="radio" name="type-input" value="2" <?php if (isset($_GET['type-input']) & $_GET['type-input']='2'){
                        echo 'checked';}?>/>Из социальных сетей</p>
                        <p><input type="radio" name="type-input" value="4" <?php if (isset($_GET['type-input']) & $_GET['type-input']='4'){
                        echo 'checked';}?>/>Из рекламы</p>
                        <p><input type="radio" name="type-input" value="3" <?php if (isset($_GET['type-input']) & $_GET['type-input']='4'){
                        echo 'checked';}?>/>От друзей/знакомых</p>
                    </div>
                    <p>Тип обращения: 
                    <select size="1" name="letter-type" id="letter-type">
                        <option value="1">Предложение</option>
                        <option value="2">Жалоба</option>                        
                    </select></p>
                    <div class="appeal-text">
                        <p>Текст сообщения: </p>
                        <textarea name="tell-us-message" placeholder="Введите текст" rows="5" wrap="soft"></textarea>
                    </div>
                    <p>Вложения: <input type="file" name="file-input" multiple></p>
                    <p>Даю согласие на обработку персональных данных <input type="checkbox"></p>
                    <p><div class="buttons"><input type="reset"><input type="submit"></div></p>
                </div>
            </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="down-line">
            <div class="bottom-items">
                <a class="info">Саркисова Варвара, группа 211-362</a>
                <a class="info">Почта:</a>
                <a class="info" href="#">varyakisova@mail.ru</a>
                <a class="info">Телефон:</a>
                <a class="info" href="#">+7(915)041-91-27</a>
                <a class = "foot-date" href="#"><?php require "date.php" ?></a>
            </div>
        </div>
    </footer>  
</body>