
<?php 
     /*  если пользователь не зарегистрирован, то ему будет дана возможность повторить ввод 
         имени и пароля. */ 
         if(!isset($_SESSION["logged_user"])){ 
         header("Location: index.php"); 
         exit; 
    } 
?> 
<html> 
     <body> 
        Приветствуем Вас , вы на секретной странице !!! 
<a href=exit.php>Выход</a>
     </body> 
</html>
