<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <?php require "name.php"; ?>
</head>
<header>
        <div class="header">
            <div class="container">
                <div class="header-line">
                    <div class="nav">
                        <a data-content="Homepage" href="<?php 
                            $name='Homepage '; 
                            $link='index.php'; 
                            $current_page=true; 
                            echo $link; 
                        ?>"> <?php 
                        if( $current_page )
                            echo $name;
                        ?></a>
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
                            echo $link; 
                        ?>"> <?php 
                        if( $current_page ) 
                            echo $name;
                        ?></a>
                        <a data-content="Feedback" href="<?php 
                            $name='Feedback'; 
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
            <div class="container-login-form">
            <form class="login_form" method="post" name="login_form">
                <h1>Log in</h1>
                <div class="elements-login">
                    <p>Login: <input type="text" name="log-name"placeholder="Enter login" size="18"/></p>
                    <p>Password: <input type="password" name="pass-name"placeholder="Enter password" size="18"/></p>
                    <p>Remember me <input type="checkbox"></p>
                    <p><div class="buttons"><input type="reset"><input type="submit"></div></p>
                </div>
            </form>
            </div>
        </div>
        
    </main>
    <footer>
        <div class="down-line">
            <div class="bottom-items">
                <a class="info"> Саркисова Варвара, группа 211-362</a>
                <a class="info"> Почта:</a>
                <a class="info" href="#">varyakisova@mail.ru</a>
                <a class="info"> Телефон:</a>
                <a class="info" href="#">+7(915)041-91-27</a>
                <a class = "foot-date" href="#"><?php require "date.php" ?></a>
            </div>
        </div>
    </footer>  
</body>
</html>